<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'avatar' => 'required',
                'idUsersTypes' => 'required',
                'phone' => 'required',
                'cpf' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'cpf' => $request->cpf,
                'avatar' => $request->avatar,
                'id_users_types' => $request->idUsersTypes
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Usuário criado com sucesso!'
            ], 201);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getUsers()
    {
        try {
            $user = User::select('users.*', 'ut.name as userTypeName', 'ut.id as idUserTypeName')
                ->leftJoin('users_types as ut', 'ut.id', '=', 'users.id_users_types')
                ->paginate(10);

            return response()->json([
                'status' => 'success',
                'message' => 'Users all',
                'user' => $user
            ]);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getUsersById(Request $request)
    {
        try {
            $user = $user = User::select('users.*', 'ut.name as userTypeName', 'ut.id as idUserTypeName')
                ->leftJoin('users_types as ut', 'ut.id', '=', 'users.id_users_types')
                ->where('users.id', $request->idUser)
                ->first();

            if (!empty($user)) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Usuário encontrado com sucesso!',
                    'user' => $user
                ], 200);
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

    public function update(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'string|email|max:255|unique:users',
                'phone' => 'required|string|max:20',
                'cpf' => 'required|string|max:20',
                'avatar' => 'required',
                'idUsersTypes' => 'required',
            ]);

            $user = User::find($request->id);

            if (!empty($user)) {
                $dataUpdate = [
                    "name" => $request->name,
                    "phone" => $request->phone,
                    "cpf" => $request->cpf,
                    "avatar" => $request->avatar,
                    "id_users_types" => $request->idUsersTypes
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

    public function updateUserInformation(Request $request)
    {
        try {
            $request->validate([
                "name" => 'required|string|max:255',
                "cpf" => 'required|string|max:20',
                "phone" => 'required|string|max:20'
            ]);

            $user = User::find($request->id);

            if (!empty($user)) {
                $update = User::where('id', $request->id)
                    ->update([
                        "name" => $request->name,
                        "phone" => $request->phone,
                        "cpf" => $request->cpf,
                        "avatar" => $request->avatar
                    ]);

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

    public function updateEmail(Request $request)
    {
        try {
            // valida os dados da requisição
            $request->validate([
                'id' => 'required',
                'email' => 'required|string|email|max:255',
                'newEmail' => 'required|string|email|max:255'
            ]);

            $user = User::find($request->id);

            // verifica se o usuário não existe
            if (empty($user)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Não foi possível encontrar o usuário',
                ], 404);
            }

            // deixa visiavel a senha só nessa consulta
            $user->makeVisible([
                'password'
            ]);

            // compara as senhas, caso esteja diferente
            if (!Hash::check($request->confirmPasswordEmail, $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Senha é diferente'
                ], 404);
            }

            $update = $user->update([
                "email" => $request->newEmail
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Email atualizado com sucesso!'
            ], 202);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            // valida os dados da requisição
            $request->validate([
                'id' => 'required',
                'password' => 'required',
                'newPassword' => 'required|min:8'
            ]);

            $user = User::find($request->id);

            // verifica se o usuário não existe
            if (empty($user)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Não foi possível encontrar o usuário',
                ], 404);
            }

            // deixa visiavel a senha só nessa consulta
            $user->makeVisible([
                'password'
            ]);


            // caso a senha atual e do que o usuário digitou seja diferentes
            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'A senha inválida, por favor, digita a correta!'
                ], 404);
            }

            // caso a atual senha seja igual da nova senha
            if (Hash::check($request->newPassword, $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'A senha é igual da atual, por favor digitar outra senha.'
                ], 404);
            }

            // transforma a senha em hash
            $newPassword = Hash::make($request->newPassword);

            $update = $user->update([
                "password" => $newPassword
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Senha atualizada com sucesso!'
            ], 202);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function delete($id)
    {
        try {
            $delete = User::where('id', $id)
                ->delete();

            if ($delete) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Usuário removido com sucesso!',
                ], 202);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Não foi possível deletar o usuário',
            ], 404);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }
}
