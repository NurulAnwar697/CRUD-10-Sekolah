<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubjectRequest; // Request validasi

class SubjectController extends Controller
{
    /**
     * Menampilkan daftar semua mata pelajaran.
     */
    public function index()
    {
        // Ambil semua mata pelajaran
        $subjects = Subject::with('teacher')->get(); // Eager load teacher
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Menampilkan form untuk membuat mata pelajaran baru.
     */
    public function create()
    {
        $teachers = Teacher::all(); // Ambil semua guru untuk dipilih
        return view('subjects.create', compact('teachers'));
    }

    /**
     * Menyimpan mata pelajaran baru ke dalam database.
     */
    public function store(StoreSubjectRequest $request)
    {
        // Validasi sudah dilakukan di SubjectRequest
        Subject::create($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit mata pelajaran yang ada.
     */
    public function edit(Subject $subject)
    {
        $teachers = Teacher::all(); // Ambil semua guru untuk dipilih
        return view('subjects.edit', compact('subject', 'teachers'));
    }

    /**
     * Memperbarui mata pelajaran yang ada di database.
     */
    public function update(StoreSubjectRequest $request, Subject $subject)
    {
        // Validasi sudah dilakukan di SubjectRequest
        $subject->update($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    /**
     * Menghapus mata pelajaran dari database.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
