@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')
    <h1>Tambah Guru</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" name="nip" id="nip" class="form-control">
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control">
        </div>
        <a href="{{ route('teachers.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
