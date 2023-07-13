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
    Route::post('/user/register', 'register')->middleware('permissions');
    Route::get('/user/getUsers', 'getUsers')->middleware('permissions');
    Route::post('/user/getUsersById', 'getUsersById');
    Route::put('/user/update', 'update')->middleware('permissions');
    Route::put('/user/updateUserInformation', 'updateUserInformation');
    Route::delete('/user/delete/{id}', 'delete')->middleware('permissions');
    Route::put('/user/updateEmail', 'updateEmail');
    Route::put('/user/updatePassword', 'updatePassword');
});

Route::controller(PermissionController::class)->group(function () {
    Route::get('/permissions/getMenus', 'getMenus');
    Route::get('/permissions/getTypes', 'getTypes')->middleware('permissions');
    Route::get('/permissions/getTypesSimplePaginate', 'getTypesSimplePaginate');
    Route::post('/permissions/getUsersTypesById', 'getUsersTypesById');
    Route::put('/permissions/update', 'update')->middleware('permissions');
    Route::delete('/permissions/delete/{id}', 'delete')->middleware('permissions');
    Route::post('/permissions/create', 'create')->middleware('permissions');
});
