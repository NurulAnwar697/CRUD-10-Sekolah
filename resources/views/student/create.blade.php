@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <h1>Tambah Siswa</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" id="nisn">
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" name="birth_date" class="form-control" id="birth_date">
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
