   
    {{-- Mengambil apa yang ada di dalam main.blade.php --}}
    @extends('layouts.main')

    {{-- Isi nya @yield('container') --}}
    @section('container')
    <h1>Halaman {{ $title }}</h1>
    <h3>Nama saya {{ $name }}</h3>
    <p>Email saya {{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
    @endsection