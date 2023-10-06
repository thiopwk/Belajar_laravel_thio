{{-- Mengambil apa yang ada di dalam main.blade.php --}}
@extends('layouts.main')

{{-- Isi nya @yield('container') --}}       
@section('container')

    {{-- posts dalam web.php diubah menjadi $post lalu akan terjadi pengulangan--}}
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            {{-- /posts/ diambil dari posts.blade.php (WAJIB SESUAI) lalu akan di arahkan ke halaman posts single yang sudah dibuat di web.php--}}
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>Karangan dari : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
        @endforeach


@endsection

