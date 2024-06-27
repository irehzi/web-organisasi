@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Detail Proker</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $proker->nama_proker }}</h5>
            <p class="card-text">Tanggal: {{ $proker->tanggal }}</p>
            <p class="card-text">Tempat: {{ $proker->tempat }}</p>
            <p class="card-text">Email: {{ $proker->email }}</p>
            <p class="card-text">Penyelenggara: {{ $proker->penyelenggara }}</p>
            <p class="card-text">Deskripsi: {{ $proker->deskripsi }}</p>
            <p class="card-text">Dibuat pada: {{ $proker->created_at ? $proker->created_at->format('d M Y H:i:s') : 'Belum dibuat' }}</p>
            <p class="card-text">Diperbarui pada: {{ $proker->updated_at ? $proker->updated_at->format('d M Y H:i:s') : 'Belum diperbarui' }}</p>

            <a href="{{ route('proker.index') }}" class="btn btn-primary">Kembali ke Daftar Proker</a>
        </div>
    </div>
</div>
@endsection
