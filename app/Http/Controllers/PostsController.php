<?php

namespace App\Http\Controllers;

use App\Models\PostsModel;

class PostsController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Unggahan',
            'posts' => PostsModel::getPosts(),
        ];

        return view('posts', $data);
    }

    public function viewPostByPostId($postId)
    {
        $data = [
            'pageTitle' => 'Detail Unggahan',
            'post' => PostsModel::getPostByPostId($postId)
        ];

        return view('post', $data);
    }
}
