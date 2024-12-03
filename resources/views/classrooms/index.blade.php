@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Kelas</h1>
    
    <a href="{{ route('classrooms.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kelas</th>
                <th>Guru Pengajar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $classroom->name }}</td>
                    <td>{{ $classroom->teacher->name }}</td>
                    <td>
                        <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
