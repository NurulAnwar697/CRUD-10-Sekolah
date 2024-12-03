<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nisn', 'birth_date', 'major_id', 'teacher_id']; // Menentukan kolom mana saja yang bisa diisi langsung, termasuk major_id dan teacher_id

    public function major()  // Menghubungkan model Student dengan model Major
    {
        return $this->belongsTo(Major::class); // Setiap siswa terhubung dengan satu jurusan
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class); // Setiap siswa terhubung dengan satu guru
    }
}
