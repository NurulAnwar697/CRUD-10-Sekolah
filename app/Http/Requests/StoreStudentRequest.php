<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules() 
    {
        $studentId = $this->student ? $this->student->id : null;  
    
        return [
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:students,nisn,' . $studentId,
            'birth_date' => 'required|date',
        ];
    }
    public function messages() {    
        return [
            'name.re'=> 'Kolom Nama Wajib Diisi',
            'nisn'=> 'Kolom NISN wajib Diisi',
            'birth_date'=> 'Kolom Birth_Date Wajib Diisi',
        ];
    }
}