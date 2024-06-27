@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Tambah Pengurus</h2>
    <form action="{{ route('pengurus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>
        <div class="form-group">
            <label for="kontak">Kontak:</label>
            <input type="text" class="form-control" id="kontak" name="kontak" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
