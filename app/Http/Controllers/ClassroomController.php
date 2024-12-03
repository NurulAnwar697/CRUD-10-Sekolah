<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Http\Requests\StoreClassroomRequest; // Import ClassroomRequest
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Menampilkan daftar kelas
    public function index()
    {
        $classrooms = Classroom::with('teacher')->get(); // Mengambil semua kelas beserta data guru pengajar
        return view('classrooms.index', compact('classrooms')); // Menampilkan view index dengan data kelas
    }

    // Menampilkan form untuk membuat kelas baru
    public function create()
    {
        $teachers = Teacher::all(); // Mengambil semua data guru untuk pilihan pengajar
        return view('classrooms.create', compact('teachers')); // Menampilkan form create dengan data guru
    }

    // Menyimpan data kelas baru
    public function store(StoreClassroomRequest $request)
    {
        Classroom::create([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('classrooms.index')->with('success', 'Classroom Berhasil Ditambahkan');
    }

    // Menampilkan form untuk mengedit kelas
    public function edit(Classroom $classroom)
    {
        $teachers = Teacher::all(); // Mengambil data guru untuk pilihan pengajar
        return view('classrooms.edit', compact('classroom', 'teachers')); // Menampilkan form edit dengan data kelas dan guru
    }

    // Memperbarui data kelas
    public function update(StoreClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('classrooms.index')->with('success', 'Classroom Berhasil Diupdate');
    }

    // Menghapus kelas
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success', 'Classroom Berhasil Didelete');
    }
}
