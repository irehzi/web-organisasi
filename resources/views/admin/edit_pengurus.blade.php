@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Edit Pengurus</h2>
    <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengurus->nama }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pengurus->jabatan }}">
        </div>
        <div class="form-group">
            <label for="kontak">Kontak:</label>
            <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $pengurus->kontak }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pengurus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
