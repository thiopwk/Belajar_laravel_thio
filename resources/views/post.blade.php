
@extends('layouts.main')

@section('container')

    <article>
        <h2>Judul</h2>
        <h5>Author</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eligendi, totam numquam repellat, deleniti blanditiis alias temporibus in velit exercitationem nisi. Eos hic sapiente reprehenderit sed excepturi ducimus pariatur rem!</p>
    </article>

    {{-- /blog diambil dari blog.blade/php --}}
    <a href="/blog">Back to Blog</a>
        
@endsection