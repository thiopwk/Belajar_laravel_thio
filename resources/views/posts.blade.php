{{-- Mengambil apa yang ada di dalam main.blade.php --}}
@extends('layouts.main')

{{-- Isi nya @yield('container') --}}       
@section('container')
        <h1 class="mb-5">{{ $title }}</h1>
    {{-- posts dalam web.php diubah menjadi $post lalu akan terjadi pengulangan--}}
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            {{-- /posts/ diambil dari posts.blade.php (WAJIB SESUAI) lalu akan di arahkan ke halaman posts single yang sudah dibuat di web.php--}}
            {{-- post id terhubung ke database --}}
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>

        <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}
        "class="text-decoration-none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Lihat Lebih Lanjut</a>

    </article>
        @endforeach


@endsection
