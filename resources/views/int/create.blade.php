@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Tambah Inventaris</h2>
    <form action="{{ route('inventaris.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('inventaris.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
