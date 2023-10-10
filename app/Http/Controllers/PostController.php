<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Method index
    public function index()
    {           
        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",

            // "posts" => Post::all()
            // with untuk mengatasi n+1 problem dan mengatasi query yang berlebihan (gak ngelag) -EAGER LOADING

            // wajib download 'composer require itsgoingd/clockwork'
            // "posts" => Post::latest()->get()

            // mengambil filter dari Post.php
            "posts" => Post::latest()->filter(request(['search', 'category']))->get()
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