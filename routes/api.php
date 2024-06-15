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
Route::get('/music/detail/{id}',  [App\Http\Controllers\ProjectController::class, 'music_detail']);
Route::get('/template/list/{value}',  [App\Http\Controllers\ProjectController::class, 'template_list']);
Route::get('/music/list',  [App\Http\Controllers\ProjectController::class, 'music_list']);
Route::delete('/music/delete/{id}',  [App\Http\Controllers\ProjectController::class, 'music_delete']);
Route::post('/music/store',  [App\Http\Controllers\ProjectController::class, 'music_store']);
Route::get('/project/list',  [App\Http\Controllers\ProjectController::class, 'project_list']);
Route::get('/project/detail/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_detail']);
Route::post('/project/update/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_update']);
Route::delete('/project/delete/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_delete']);
// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
// Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
// Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
// Route::post('/project/store',  [App\Http\Controllers\ProjectController::class, 'project_store']);
// Route::get('/music/detail/{id}',  [App\Http\Controllers\ProjectController::class, 'music_detail']);
// Route::get('/template/list/{value}',  [App\Http\Controllers\ProjectController::class, 'template_list'])->middleware('jwt.verify');
// Route::get('/music/list',  [App\Http\Controllers\ProjectController::class, 'music_list'])->middleware('jwt.verify');
// Route::delete('/music/delete/{id}',  [App\Http\Controllers\ProjectController::class, 'music_delete'])->middleware('jwt.verify');
// Route::post('/music/store',  [App\Http\Controllers\ProjectController::class, 'music_store'])->middleware('jwt.verify');
// Route::get('/project/list',  [App\Http\Controllers\ProjectController::class, 'project_list'])->middleware('jwt.verify');
// Route::get('/project/detail/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_detail']);
// Route::post('/project/update/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_update']);
// Route::delete('/project/delete/{id}',  [App\Http\Controllers\ProjectController::class, 'project_list_delete']);
