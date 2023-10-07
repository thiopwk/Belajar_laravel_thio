<?php

// menghubungkan ke model post.php (klik kanan - import all classes)
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Afdhika Syahputra",
        "email" => "afdhikasyahputra@gmail.com",
        "img" => "dhika.jpg",
        "title" => "About"

    ]);
});

// Hubungkan dengan Controllers-PostController | Method Index
Route::get('/posts', [PostController::class, 'index']);
// post ditangkap oleh PostController & slug ditangkap dari posts.blade
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view ('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});