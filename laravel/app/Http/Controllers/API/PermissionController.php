<?php

namespace App\Http\Controllers\API;

use App\Models\UsersTypes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
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
            return response()->json(compact('e'), 404);
        }
    }

    public function getUsersTypesById(Request $request)
    {
        try {
            $request->validate([
                'id_users_types' => 'required',
            ]);

            $type = UsersTypes::find($request->id_users_types);

            if (!empty($type)) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Tipo de usuário encontrado com sucesso!',
                    'type' => $type
                ], 200);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi encontrado o tipo de usuário',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    /*
    public function update(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'string|email|max:255|unique:users',
                'phone' => 'required|string|max:20',
                'cpf' => 'required|string|max:20',
                'avatar' => 'required',
            ]);

            $user = User::find($request->id);

            if (!empty($user)) {
                $dataUpdate = [
                    "name" => $request->name,
                    "phone" => $request->phone,
                    "cpf" => $request->cpf,
                    "avatar" => $request->avatar
                ];

                if ($request->email) {
                    $dataUpdate["email"] = $request->email;
                }

                $update = User::where('id', $request->id)
                    ->update($dataUpdate);

                if ($update) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Usuário atualizado com sucesso!',
                    ], 202);
                }
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi encontrado o usuário',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }
*/

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
}
