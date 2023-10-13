<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // nampilin semua data post berdasarkan user tertentu
    public function index()
    {
        return view('dashboard.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    // menambahkan halaman postingan
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // menjalankan fungsi tambah
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // fungsi lihat detail
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // halaman untuk ubah data
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // halaman untuk proses ubah data
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // halaman untuk menghapus postingan
    public function destroy(Post $post)
    {
        //
    }
}
