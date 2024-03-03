<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'page_title' => 'Utama'
    ];

    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'page_title' => 'Tentang Kami'
    ];

    return view('about', $data);
});

Route::get('/posts', function () {
    $data = [
        'page_title' => 'Unggahan'
    ];

    return view('posts', $data);
});
