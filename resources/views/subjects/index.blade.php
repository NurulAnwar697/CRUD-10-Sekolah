@extends('layouts.app')

@section('title', 'Subjects')

@section('content')
    <h1>Subjects</h1>
    <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">Add New Subject</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Teacher</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subjects as $subject)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->teacher->name }}</td>
                    <td>{{ $subject->description }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No subjects found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
