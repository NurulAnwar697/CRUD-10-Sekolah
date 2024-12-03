<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMajorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    public function messages(){
        return[
           'name'=> 'Kolom Nama Wajib Diisi',
           'description'=> 'Kolom Desccripsi Wajib Diisi',
        ];
    }
}
