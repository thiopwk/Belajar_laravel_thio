   
    {{-- Mengambil apa yang ada di dalam main.blade.php --}}
    @extends('layouts.main')

    {{-- Isi nya @yield('container') --}}
    @section('container')
    <h1>Halaman Blog</h1>
    <h3>Nama saya {{ $name }}</h3>
    <p>Email saya {{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200px">
    @endsection