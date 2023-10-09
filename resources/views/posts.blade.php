{{-- Mengambil apa yang ada di dalam main.blade.php --}}
@extends('layouts.main')

{{-- Isi nya @yield('container') --}}       
@section('container')
        <h1 class="mb-5">{{ $title }}</h1>

@if($posts->count())

{{-- membuat foto (kartu) --}}
<div class="card mb-3">
    {{-- API UNTUK FOTO AGAR OTOMATIS --}}
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        {{-- mengarahkan ke posts slug & mengambil dari posts title --}}
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
            {{-- mmemasuki link posts author username --}}
            By : <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
            {{-- mengambil nama author dari posts author --}}
            {{$posts[0]->author->name}}</a>
            {{-- memasuki link posts category slug --}}
            in <a href="/categories/{{$posts[0]->category->slug}}
             {{-- mengambil posts category name --}}
        "class="text-decoration-none">{{ $posts[0]->category->name }}</a>
        {{-- postingan terakhir pada waktu ... --}}
        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
    
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-success">Lihat Lebih Lanjut</a>


    </div>
@else
    <p class="text-center fs-4">Tidak Ada Postingan.</p>
@endif


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 fs-6" style="background-color: rgba(102, 94, 94, 0.7)"><a href="/categories/{{$post->category->slug}}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">
                        By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                        {{$post->author->name}}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-success">Lihat Lebih Lanjut</a>
                </div>
              </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
