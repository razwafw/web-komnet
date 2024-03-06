<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Unggahan',
            'posts' => Post::all(),
        ];

        return view('posts', $data);
    }

    public function viewPostByPostId($postId)
    {
        $data = [
            'pageTitle' => 'Detail Unggahan',
            'post' => Post::find($postId)
        ];

        return view('post-detail', $data);
    }
}
