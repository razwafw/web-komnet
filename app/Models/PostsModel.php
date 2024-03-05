<?php

namespace App\Models;

class PostsModel
{
    static $mockPosts = [
        [
            'postTitle' => 'Post #1',
            'postDate' => 'Jan 1st, 1970',
            'postDescription' => 'Description for Post #1',
            'postId' => 'post-1'
        ],
        [
            'postTitle' => 'Post #2',
            'postDate' => 'Jan 2nd, 1970',
            'postDescription' => 'Description for Post #2',
            'postId' => 'post-2'
        ]
    ];

    public static function getPosts()
    {
        return collect(self::$mockPosts);
    }

    public static function getPostByPostId($postId)
    {
        $posts = static::getPosts();

        return $posts->firstWhere('postId', $postId);
    }
}
