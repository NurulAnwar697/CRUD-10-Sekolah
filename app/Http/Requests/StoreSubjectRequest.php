<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
{
    /**
     * Menentukan apakah permintaan ini diizinkan.
     */
    public function authorize()
    {
        return true; // Set true jika tidak ada pembatasan akses
    }

    /**
     * Menentukan aturan validasi untuk permintaan ini.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255', // Nama mata pelajaran wajib
            'teacher_id' => 'required|exists:teachers,id', // Harus ada di tabel teachers
            'description' => 'nullable|string', // Deskripsi opsional
        ];
    }
}
