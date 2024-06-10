<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/{value}', [App\Http\Controllers\ProjectController::class, 'get_undangan']);


// Route::get('/link', function () {        
//     $target = '/home/public_html/storage/app/public';
//     $shortcut = '/home/public_html/public/storage';
//     symlink($target, $shortcut);
//  });