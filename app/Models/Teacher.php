<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nip', 'birth_date']; // // Menentukan data apa saja yang boleh diisi secara langsung

    public function students()  // Menghubungkan model Teacher dengan model Student
    {
        return $this->hasMany(Student::class); // Satu guru bisa memiliki banyak siswa
    }

    //  menggunakan relasi banyak ke banyak dengan Major
    public function majors() // Menghubungkan model Teacher dengan model Major
    {
        return $this->belongsToMany(Major::class); // Satu guru bisa terkait dengan banyak jurusan dan sebaliknya
    }
}
