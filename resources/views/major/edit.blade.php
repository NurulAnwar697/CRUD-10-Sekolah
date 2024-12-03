@extends('layouts.app')

@section('title', 'Edit Jurusan')

@section('content')
    <h1>Edit Jurusan</h1>
    <form action="{{ route('majors.update', $major->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Jurusan</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $major->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="description">{{ old('description', $major->description) }}</textarea>
        </div>
        <a href="{{ route('majors.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
