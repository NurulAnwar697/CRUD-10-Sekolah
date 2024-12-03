@extends('layouts.app')

@section('title', 'Major - SMKN 2 Kraksaan')

@section('content')
    <h1 class="m-3">Daftar Jurusan</h1>
    <a href="{{ route('majors.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($majors as $major)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $major->name }}</td>
                    <td>{{ $major->description }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('majors.edit', $major->id) }}" class="btn btn-primary me-2">Edit</a>
                            <form action="{{ route('majors.destroy', $major->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
