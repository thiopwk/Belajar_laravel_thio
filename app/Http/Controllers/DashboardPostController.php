<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // nampilin semua data post berdasarkan user tertentu
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // menambahkan halaman postingan
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // menjalankan fungsi tambah
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image',
            'body' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        // Str untuk membatasi/limit huruf     strip_tags untuk menghilangkan tag html pada bagian body login dashboard
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...' );

        Post::create($validatedData);

        // untuk kembali halaman posts dashboard dan mengirimkan success dengan session
        return redirect('/dashboard/posts')-> with('success', 'New post has been added!');

    }

    /**
     * Display the specified resource.
     */
    // fungsi lihat detail
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // halaman untuk ubah data
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // halaman untuk proses ubah data
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
        ];

        if($request->slug != $post->slug){

            $rules['slug'] = 'required|unique:posts';

        }

        $validateData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        // Str untuk membatasi/limit huruf     strip_tags untuk menghilangkan tag html pada bagian body login dashboard
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...' );

        Post::where('id', $post->id)
            ->update($validatedData);

        // untuk kembali halaman posts dashboard dan mengirimkan success dengan session
        return redirect('/dashboard/posts')-> with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    // halaman untuk menghapus postingan
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        // untuk kembali halaman posts dashboard dan mengirimkan success dengan session
        return redirect('/dashboard/posts')-> with('success', 'Post has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

}

