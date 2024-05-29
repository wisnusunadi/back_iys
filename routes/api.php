<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('jwt:vevrify')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::post('/project/store',  [App\Http\Controllers\ProjectController::class, 'project_store']);
Route::get('/project/list',  [App\Http\Controllers\ProjectController::class, 'project_list']);
Route::get('/project/detail/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_detail']);
    



