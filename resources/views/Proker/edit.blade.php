@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Edit Proker</h2>
    <form action="{{ route('proker.update', $proker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_proker">Nama Proker:</label>
            <input type="text" class="form-control" id="nama_proker" name="nama_proker" value="{{ $proker->nama_proker }}">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $proker->tanggal }}">
        </div>
        <div class="form-group">
            <label for="tempat">Tempat:</label>
            <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $proker->tempat }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $proker->email }}">
        </div>
        <div class="form-group">
            <label for="penyelenggara">Penyelenggara:</label>
            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="{{ $proker->penyelenggara }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $proker->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('proker.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
