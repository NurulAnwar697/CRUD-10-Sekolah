<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'teacher_id']; // Menentukan kolom yang bisa diisi langsung, yaitu nama kelas dan guru pengajar

    public function students()
    {
        return $this->hasMany(Student::class); // Satu kelas bisa memiliki banyak siswa
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class); // Setiap kelas hanya memiliki satu guru pengajar
    }
}
