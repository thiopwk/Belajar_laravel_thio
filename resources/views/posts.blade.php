{{-- Mengambil apa yang ada di dalam main.blade.php --}}
@extends('layouts.main')

{{-- Isi nya @yield('container') --}}       
@section('container')

    {{-- posts dalam web.php diubah menjadi $post lalu akan terjadi pengulangan--}}
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            {{-- /post/ diambil dari post.blade.php (WAJIB SESUAI) --}}
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>Karangan dari : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
        @endforeach


@endsection

