@extends('layouts.main')

@section('container')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <div class="container d-flex justify-content-center">
    <div class="col-md-6">
  <h1 class="d-block text-center mt-3">LOGIN SEBAGAI USER</h1>

  <br>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Alamat email</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
  
    <a href="/user.isi" class="w-100 btn btn-lg btn-primary mt-3">Login</a>

  
  <small class="d-block text-center mt-3">Belum Punya Akun? <a href="/register">Daftar!</a></small>

@endsection
        

  