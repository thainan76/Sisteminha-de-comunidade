<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\User;

class CommunityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAllPost()
    {
        try {
            //$user = auth()->user();
            $posts = Community::orderBy('id', 'desc')->paginate(10);

            foreach ($posts as $key => $post) {
                $posts[$key]['user'] = User::where('id', $post['id_user'])->first();
            }

            if (empty($posts)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Nenhum posts não encontrado!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Post encontrado com sucesso!',
                'data' => $posts
            ], 200);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function createPost(Request $request)
    {
        try {
            $request->validate([
                'description' => 'required',
            ]);

            $user = auth()->user();

            $posts = Community::create([
                'id_user' => $user->id,
                'description' => $request->description
            ]);

            if (empty($posts)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Erro ao criar o post!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Posts criado com sucesso!',
            ], 201);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }
}
