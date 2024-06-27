@extends('layouts.main')

@section('container')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
  <div class="container d-flex justify-content-center">
    <div class="col-md-6">
  <h1 class="d-block text-center mt-3">DAFTAR</h1>
  <form action="{{ route('daftarregister') }}" method="POST"> <!-- Tambahkan tag form dan tentukan action -->
    @csrf
  <div class="form-floating">
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
    <label for="username">Username</label>
  </div>

  <br>
  
  <div class="form-floating">
    <input type="text" name="religion" class="form-control" id="religion" placeholder="religion">
    <label for="religion">Agama</label>
  </div>
  
  <br>
  
  <div class="form-floating">
    <select name="gender" class="form-control" id="gender">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <label for="gender">Jenis Kelamin</label>
</div>

  
  <br>
  
  <div class="form-floating">
    <input type="text" name="place_and_date_of_birth" class="form-control" id="place_and_date_of_birth" placeholder="Tempat dan Tanggal Lahir">
    <label for="place_and_date_of_birth">Tempat dan Tanggal Lahir</label>
  </div>

  <br>

  <div class="form-floating">
    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
    <label for="email">Alamat email</label>
  </div>

  <br>

  <div class="form-floating">
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    <label for="password">Password</label>
  </div>

    
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
    
  </form>
  <small class="d-block text-center mt-3">Sudah Daftar? <a href="/log_user">Masuk!</a></small>
  
  @endsection