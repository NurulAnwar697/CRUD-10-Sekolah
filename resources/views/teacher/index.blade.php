@extends('layouts.app')

@section('title', 'Teacher - SMKN 2 Kraksaan')

@section('content')
    <h1 class="mb-3">Ini Halaman Guru</h1>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($teachers as $teacher)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->nip }}</td>
                    <td>{{ $teacher->birth_date }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary me-2">Edit</a>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
