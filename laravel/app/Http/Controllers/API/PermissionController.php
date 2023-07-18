<?php

namespace App\Http\Controllers\API;

use App\Models\UsersTypes;
use App\Models\UsersMenus;
use App\Models\UsersMenuViews;
use App\Models\UsersTypesMeusRel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPSTORM_META\map;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getTypesSimplePaginate()
    {
        try {
            $types = UsersTypes::simplePaginate(12);

            return response()->json([
                'status' => 'success',
                'message' => 'Tipos de usuários encontrado com sucesso!',
                'types' => $types
            ]);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('e'), 404);
        }
    }

    public function getTypes()
    {
        try {
            $types = UsersTypes::paginate(10);

            return response()->json([
                'status' => 'success',
                'message' => 'Tipos de usuários encontrado com sucesso!',
                'types' => $types
            ]);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getUsersTypesById(Request $request)
    {
        try {
            $request->validate([
                'id_users_types' => 'required',
            ]);

            $typeJson = [];

            $type = UsersTypes::find($request->id_users_types);

            if (!empty($type)) {

                $usersTypesMeusRel = UsersTypesMeusRel::select('UMV.id as id_users_menu_views', 'UM.id as id_users_menus', 'UM.menu as menuName', 'UMV.create', 'UMV.update', 'UMV.read', 'UMV.delete')
                    ->join('users_menus as UM', 'UM.id', '=', 'users_types_menus_rel.id_users_menus')
                    ->join('users_menu_views as UMV', 'UMV.id', '=', 'users_types_menus_rel.id_users_menu_views')
                    ->where('users_types_menus_rel.id_users_types', $type->id)->get();

                if (!empty($usersTypesMeusRel)) {
                    $typeJson = array(
                        "id" => $type->id,
                        "userTypeName" => $type->name,
                        "menus" => $usersTypesMeusRel
                    );

                    return response()->json([
                        'status' => 'success',
                        'message' => 'Tipo de usuário encontrado com sucesso!',
                        'type' => $typeJson
                    ], 200);
                }
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi encontrado as permissões',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function update(Request $request)
    {
        // inicia o transition
        DB::beginTransaction();

        try {
            $request->validate([
                'id' => 'required',
                'userTypeName' => 'required',
                'menus' => 'required'
            ]);

            $UsersTypes = UsersTypes::find($request->id);

            if (!empty($UsersTypes)) {

                $updateUsersTypes = $UsersTypes->update(['name' => $request->userTypeName]);

                if ($updateUsersTypes) {
                    $menus = $request->menus;

                    foreach ($menus as $key => $menu) {
                        UsersMenuViews::where('id', $menu['id_users_menu_views'])->update([
                            'create' => $menu['create'],
                            'read' => $menu['read'],
                            'update' => $menu['update'],
                            'delete' => $menu['delete']
                        ]);
                    }

                    // realiza a alteração no DB
                    DB::commit();

                    return response()->json([
                        'status' => 'success',
                        'message' => 'Permissões atualizado com sucesso!',
                    ], 202);
                }
            }

            // faz o rollback
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi possível atualizar as permissões',
            ], 404);
        } catch (\Exception $e) {
            // faz o rollback
            DB::rollBack();

            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function create(Request $request)
    {
        // inicia o transition
        DB::beginTransaction();

        try {
            $request->validate([
                'userTypeName' => 'required',
                'menus' => 'required'
            ]);

            $createdUsersTypes = UsersTypes::create(['name' => $request->userTypeName]);

            if (!empty($createdUsersTypes)) {

                foreach ($request->menus as $menu) {

                    $createdUsersMenuViews = UsersMenuViews::create([
                        'create' => $menu['create'],
                        'read' => $menu['read'],
                        'update' => $menu['update'],
                        'delete' => $menu['delete']
                    ]);

                    if (!empty($createdUsersMenuViews)) {

                        UsersTypesMeusRel::create([
                            'id_users_types' => $createdUsersTypes->id,
                            'id_users_menus' => $menu['id_users_menus'],
                            'id_users_menu_views' => $createdUsersMenuViews->id
                        ]);
                    }
                }

                // realiza a alteração no DB
                DB::commit();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Permissão criado com sucesso!',
                ], 201);
            }

            // faz o rollback
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi possível atualizar as permissões',
            ], 404);
        } catch (\Exception $e) {
            // faz o rollback
            DB::rollBack();

            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function delete($id)
    {
        try {
            $delete = UsersTypes::where('id', $id)
                ->delete();

            if ($delete) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Tipo de usuário removido com sucesso!',
                ], 202);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi possível deletar o tipo de usuário',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getMenus()
    {
        try {
            $menuJson = [];

            $menus = UsersMenus::select('users_menus.id as id', 'users_menus.menu as menuName')->get();

            if (!empty($menus)) {

                foreach ($menus as $key => $menu) {
                    $menuJson[$key] = array(
                        'id_users_menus' => $menu['id'],
                        'menuName' => $menu['menuName'],
                        'create' => false,
                        'read' => false,
                        'update' => false,
                        'delete' => false,
                    );
                }


                return response()->json([
                    'status' => 'success',
                    'message' => 'Tipo de usuário encontrado com sucesso!',
                    'menus' => $menuJson
                ], 200);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi encontrado as permissões',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }
}
