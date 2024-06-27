@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Edit Inventaris</h2>
    <form action="{{ route('inventaris.update', $inventaris->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $inventaris->nama }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $inventaris->jumlah }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('inventaris.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
