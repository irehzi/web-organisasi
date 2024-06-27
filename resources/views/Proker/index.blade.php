@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Daftar Proker</h2>
    <a href="{{ route('proker.create') }}" class="btn btn-primary mb-3">Tambah Proker</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Proker</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Email</th>
                <th>Penyelenggara</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prokers as $proker)
                <tr>
                    <td>{{ $proker->id }}</td>
                    <td>{{ $proker->nama_proker }}</td>
                    <td>{{ $proker->tanggal }}</td>
                    <td>{{ $proker->tempat }}</td>
                    <td>{{ $proker->email }}</td>
                    <td>{{ $proker->penyelenggara }}</td>
                    <td>{{ $proker->deskripsi }}</td>
                    <td>
                        <a href="{{ route('proker.show', $proker->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('proker.edit', $proker->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('proker.destroy', $proker->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
