<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Http\Requests\StoreMajorRequest;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    
    public function index()
    {
        $majors = Major::all(); 
        return view('major.index', compact('majors')); 
    }

    public function create()
    {
        return view('major.create'); 
    }

    public function store(StoreMajorRequest $request)
    {
        Major::create($request->validated()); 
        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan.'); 
    }

    public function edit(Major $major)
    {
        return view('major.edit', compact('major')); 
    }

    public function update(StoreMajorRequest $request, Major $major)
    {
        $major->update($request->validated()); 
        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil diperbarui.'); 
    }

    public function destroy(Major $major)
    {
        $major->delete(); 
        return redirect()->route('majors.index'); 
    }
}
