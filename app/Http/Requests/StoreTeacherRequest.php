<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Mengizinkan semua pengguna untuk mengakses request ini
    }


    public function rules() // Menentukan aturan validasi untuk data yang dikirimkan
    {
        $teacherId = $this->teacher ? $this->teacher->id : null; // Mengambil ID guru jika ada, digunakan untuk pengecekan unik

        return [
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:teachers,nip,' . $teacherId,
            'birth_date' => 'required|date',
        ];
        
    }

    public function messages() {
        return [
            'name'=> 'Kolom Nama Wajib Diisi',
            'nisn'=> 'Kolom NISN wajib Diisi',
            'birth_date'=> 'Kolom Birth_Date Wajib Diisi',
        ];
    }
}
