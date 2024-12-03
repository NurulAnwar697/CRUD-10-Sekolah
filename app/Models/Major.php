<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description']; // Menentukan kolom mana saja yang bisa diisi langsung, yaitu nama jurusan dan deskripsi

    public function students()
    {
        return $this->hasMany(Student::class); // Satu jurusan bisa memiliki banyak siswa
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);  // Satu jurusan bisa memiliki banyak guru dan sebaliknya
    }
}
