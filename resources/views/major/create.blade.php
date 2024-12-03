@extends('layouts.app')

@section('title', 'Tambah Jurusan')

@section('content')
    <h1>Tambah Jurusan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Jurusan</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <a href="{{ route('majors.index') }}" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
