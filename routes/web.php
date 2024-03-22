<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'index']);

Route::redirect('/', '/home');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{postId}', [PostController::class, 'viewPostByPostId']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login/authenticate-user', [LoginController::class, 'authenticateUser']);
