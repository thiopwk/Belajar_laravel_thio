<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Method index
    public function index()
    {   
        // mencari data dalam post lalu diurutkan dari yang paling baru
        $posts = Post::latest();

        // fungsi search mencari apapun yang ada di depan dan belakang
        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            // with untuk mengatasi n+1 problem dan mengatasi query yang berlebihan (gak ngelag) -EAGER LOADING
            // wajib download 'composer require itsgoingd/clockwork'
            // "posts" => Post::latest()->get()
            "posts" => $posts->get()
        ]);
    }

    // Method show
    // Post $post diambil dari web.php
    public function show(Post $post)
    {
        return view('post',[
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

}