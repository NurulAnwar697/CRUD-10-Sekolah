<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all(); 
        return view('teacher.index', compact('teachers')); 
    }

    public function create()
    {
        return view('teacher.create'); 
    }

    public function store(StoreTeacherRequest $request)
    {
        Teacher::create($request->validated()); 
        return redirect()->route('teachers.index'); 
    }

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher')); 
    }

    public function update(StoreTeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->validated()); 
        return redirect()->route('teachers.index'); 
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete(); 
        return redirect()->route('teachers.index'); 
    }
}
