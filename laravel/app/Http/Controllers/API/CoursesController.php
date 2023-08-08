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
                "description" => "required",
                "price" => "required",
                "published" => "required"
            ]);

            $user = auth()->user();

            $courses = Courses::create([
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
                "published" => $request->published,
                "id_author" => $user->id,
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
                'course_id' => $courses->id
            ], 201);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function createOrUpdateImagem(Request $request)
    {
        try {
            $request->validate([
                "image_course" => "required|image|mimes:jpg,png,jpeg|max:2048",
                "idCourse" => "required",
            ]);

            $user = auth()->user();

            $image_path = $request->file('image_course')->store('imagesCourse', 'public');

            $courses = Courses::where("id", $request->idCourse)->update([
                "image_course" => "/storage/" . $image_path,
            ]);

            if (empty($courses)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Erro ao adicionar a imagem no curso!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Imagem criado/atualizado com sucesso!',
            ], 202);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

    public function getMyCoursesAuthor()
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
                'course' => $courses
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
                "id" => "required",
                "name" => 'required',
                "price" => "required",
                "description" => "required",
                "published" => "required",
            ]);

            $user = auth()->user();

            $update = Courses::where([
                "id" => $request->id,
                "id_author" => $user->id,
            ])->update([
                "name" => $request->name,
                "price" => $request->price,
                "published" => $request->published,
                "description" => $request->description,
            ]);

            if (empty($update)) {
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
