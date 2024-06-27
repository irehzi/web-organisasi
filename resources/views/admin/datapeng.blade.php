@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Data Pengurus</h1>
    <a href="{{ route('pengurus.create') }}" class="btn btn-primary">Tambah Pengurus</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-2">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Kontak</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pengurus as $key => $item)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jabatan }}</td>
            <td>{{ $item->kontak }}</td>
            <td>
                <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pengurus.show', $item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pengurus.edit', $item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
