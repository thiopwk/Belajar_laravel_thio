{{-- Mengambil apa yang ada di dalam main.blade.php --}}
@extends('layouts.main')

{{-- Isi nya @yield('container') --}}       
@section('container')

    {{-- posts dalam web.php diubah menjadi $post lalu akan terjadi pengulangan--}}
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            {{-- /posts/ diambil dari posts.blade.php (WAJIB SESUAI) lalu akan di arahkan ke halaman posts single yang sudah dibuat di web.php--}}
            {{-- post id terhubung ke database --}}
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }}</p>
    </article>
        @endforeach


@endsection

