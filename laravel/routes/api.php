<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PermissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('getMyInformations', 'getMyInformations');
});


Route::controller(UserController::class)->group(function () {
    Route::post('/user/register', 'register');
    Route::get('/user/getUsers', 'getUsers');
    Route::post('/user/getUsersById', 'getUsersById');
    Route::post('/user/update', 'update');
    Route::put('/user/updateUserInformation', 'updateUserInformation');
    Route::delete('/user/delete/{id}', 'delete');
    Route::put('/user/updateEmail', 'updateEmail');
    Route::put('/user/updatePassword', 'updatePassword');
});


Route::controller(PermissionController::class)->group(function () {
    Route::get('/permissions/getTypes', 'getTypes');
    Route::post('/permissions/getUsersTypesById', 'getUsersTypesById');
});
