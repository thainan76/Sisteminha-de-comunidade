<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CoursesTypes;

class CoursesTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getCourseTypes()
    {
        try {
            $coursesTypes = CoursesTypes::all();

            if (empty($coursesTypes)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Tipos de cursos não encontrado!',
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Tipos de cursos obtido com sucesso!',
                'data' => $coursesTypes
            ], 200);
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json(compact('error'), 404);
        }
    }

}
