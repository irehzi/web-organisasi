@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Detail Pengurus</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pengurus->nama }}</h5>
            <p class="card-text">Jabatan: {{ $pengurus->jabatan }}</p>
            <p class="card-text">Kontak: {{ $pengurus->kontak }}</p>
            <p class="card-text">Dibuat pada: {{ $pengurus->created_at ? $pengurus->created_at->format('d M Y H:i:s') : 'Belum dibuat' }}</p>
            <p class="card-text">Diperbarui pada: {{ $pengurus->updated_at ? $pengurus->updated_at->format('d M Y H:i:s') : 'Belum diperbarui' }}</p>

            <a href="{{ route('pengurus.index') }}" class="btn btn-primary">Kembali ke Daftar Pengurus</a>
        </div>
    </div>
</div>
@endsection
