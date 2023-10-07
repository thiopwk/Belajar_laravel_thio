@extends('layouts.main')

@section('container')

    <article>
        {{--  --}}
        <h2>{{ $post->title }}</h2>

        <p>By : Afdhika Syahputra in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    </article>

    {{-- /posts diambil dari posts.blade/php --}}
    <a href="/posts">Back to Post</a>
        
@endsection