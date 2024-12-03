@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')
    <h1>Edit Guru</h1>
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" value="{{ $teacher->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" name="nip" id="nip" value="{{ $teacher->nip }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" name="birth_date" id="birth_date" value="{{ $teacher->birth_date }}" class="form-control">
        </div>
        <a href="{{ route('teachers.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
