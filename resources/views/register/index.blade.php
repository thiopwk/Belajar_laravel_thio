@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    {{-- form --}}
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Formulir Pendaftaran</h1>
      <form>
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name@example.com">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="username@example.com">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
          <label for="email">Email Address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Sudah daftar? <a href="/login">Yuk login sekarang juga!!</a></small>
    </main>
  </div>
</div>

@endsection