@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1>Ini Halaman Siswa</h1>
    <a href="{{ route('students.create') }}" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nisn }}</td>
                    <td>{{ $student->birth_date }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary me-2">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
