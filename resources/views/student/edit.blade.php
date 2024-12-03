@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <h1>Edit Siswa</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" id="nisn" value="{{ $student->nisn }}">
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" name="birth_date" class="form-control" id="birth_date" value="{{ $student->birth_date }}">
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
