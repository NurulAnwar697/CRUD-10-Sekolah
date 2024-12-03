<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use App\Models\Teacher;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        $majors = Major::all();
        $teachers = Teacher::all();
        return view('student.create', compact('majors', 'teachers'));
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $majors = Major::all();
        $teachers = Teacher::all();
        return view('student.edit', compact('student', 'majors', 'teachers'));
    }

    public function update(StoreStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
