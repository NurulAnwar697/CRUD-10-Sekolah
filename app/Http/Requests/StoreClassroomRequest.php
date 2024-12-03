<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Mengizinkan semua user untuk melakukan request ini, bisa diganti jika perlu otorisasi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255', // Validasi untuk kolom name
            'teacher_id' => 'required|exists:teachers,id', // Validasi untuk teacher_id, memastikan ID guru ada di tabel teachers
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama kelas harus diisi.',
            'teacher_id.required' => 'Guru pengajar harus dipilih.',
            'teacher_id.exists' => 'Guru pengajar yang dipilih tidak valid.',
        ];
    }
}
