@extends('layouts.main')

@section('container')
<div class="container">
    <h2>Daftar Inventaris</h2>
    <a href="{{ route('inventaris.create') }}" class="btn btn-primary">Tambah Inventaris</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventaris as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                        <a href="{{ route('inventaris.show', $item->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('inventaris.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST" style="display:inline;">
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
