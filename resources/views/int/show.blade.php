@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Detail Inventaris</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $inventaris->nama }}</h5>
            <p class="card-text">Jumlah: {{ $inventaris->jumlah }}</p>
            <p class="card-text">Dibuat pada: {{ $inventaris->created_at->format('d M Y H:i:s') }}</p>
            <p class="card-text">Diperbarui pada: {{ $inventaris->updated_at->format('d M Y H:i:s') }}</p>

            <a href="{{ route('inventaris.index') }}" class="btn btn-primary">Kembali ke Daftar Inventaris</a>
        </div>
    </div>
</div>
@endsection
