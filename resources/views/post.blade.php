@extends('layouts.main')

@section('container')

    <article>
        {{--  --}}
        <h2>{{ $post->title }}</h2>

        {!! $post->body !!}

    </article>

    {{-- /posts diambil dari posts.blade/php --}}
    <a href="/posts">Back to Post</a>
        
@endsection