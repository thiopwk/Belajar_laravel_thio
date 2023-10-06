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
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    // Method show
    public function show($slug)
    {
        return view('post',[
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }

}
