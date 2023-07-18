<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                "name" => 'required',
                "idUser" => 'required',
                "image_course" => "required",
                "description" => "required",
            ]);

            $courses = Courses::insert([
                "name" => $request->name,
                "image_course" => "teste",
                "description" => "teste",
                "id_author" => $request->idUser,
            ]);

            if (empty($courses)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Erro ao criar o curso!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Curso criado com sucesso!',
            ], 201);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getMyCourses()
    {
        try {
            $user = auth()->user();

            $courses = Courses::where('id_author', $user->id)->paginate(10);

            if (empty($courses)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Curso não encontrado!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Curso criado com sucesso!',
                'data' => $courses
            ], 200);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getCourseById($id)
    {
        try {
            $user = auth()->user();

            $courses = Courses::where([
                "id_author" => $user->id,
                "id" => $id
            ])->first();

            if (empty($courses)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Curso não encontrado!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Curso criado com sucesso!',
                'data' => $courses
            ], 200);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function updateCourse(Request $request)
    {
        try {
            $request->validate([
                "name" => 'required',
                "idUser" => 'required',
                "image_course" => "required",
                "description" => "required",
            ]);

            $user = auth()->user();

            $update = Courses::where([
                "id" => $request->id,
                "id_author" => $user->id,
            ])->update([
                "name" => $request->name,
                "idUser" => $user->id,
                "image_course" => $request->image_course,
                "description" => $request->description,
            ]);

            if ($update) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error ao atualizar o curso!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Curso atualizado com sucesso!',
            ], 202);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function delete($id)
    {
        try {
            $user = auth()->user();

            $courses = Courses::where([
                "id_author" => $user->id,
                "id" => $id
            ])->first();

            if (empty($courses)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Erro ao deletar o curso!',
                ], 404);
            }

            $courses->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Curso deletado com sucesso!',
            ], 202);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }
}
