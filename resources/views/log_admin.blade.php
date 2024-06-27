@extends('layouts.main')

@section('container')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <div class="container d-flex justify-content-center">
    <div class="col-md-6">
  <h1 class="d-block text-center mt-3">LOGIN SEBAGAI ADMIN</h1>

  <br>
  @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
            @endif
            @if($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="/login" method="POST">
              @csrf
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Alamat email</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
  
    <a href="/admin.index" class="w-100 btn btn-lg btn-primary mt-3">Login</a>
    {{-- <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>  ini kalau pake db --}}
  
  
@endsection
        

  