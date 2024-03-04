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
    $mockPosts = [
        [
            'post_title' => 'Post #1',
            'post_date' => 'Jan 1st, 1970',
            'post_description' => 'Description for Post #1',
            'post_id' => 'post-1'
        ],
        [
            'post_title' => 'Post #2',
            'post_date' => 'Jan 2nd, 1970',
            'post_description' => 'Description for Post #2',
            'post_id' => 'post-2'
        ]
    ];

    $data = [
        'page_title' => 'Unggahan',
        'posts' => $mockPosts
    ];

    return view('posts', $data);
});

Route::get('/posts/{post_id}', function ($post_id) {
    $mockPosts = [
        [
            'post_title' => 'Post #1',
            'post_date' => 'Jan 1st, 1970',
            'post_description' => 'Description for Post #1',
            'post_id' => 'post-1'
        ],
        [
            'post_title' => 'Post #2',
            'post_date' => 'Jan 2nd, 1970',
            'post_description' => 'Description for Post #2',
            'post_id' => 'post-2'
        ]
    ];

    foreach ($mockPosts as $post) {
        if ($post['post_id'] === $post_id) {
            $mockPost = $post;
        }
    }

    $data = [
        'page_title' => 'Detail Unggahan',
        'post' => $mockPost
    ];

    return view('post', $data);
});
