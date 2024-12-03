<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama mata pelajaran
            $table->text('description')->nullable(); // Deskripsi mata pelajaran (opsional)
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade'); // Relasi ke guru
            $table->timestamps();
        });

        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade'); // Relasi ke subjects
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade'); // Relasi ke teachers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel pivot terlebih dahulu untuk menghindari error foreign key constraint
        Schema::dropIfExists('subject_teacher');
        Schema::dropIfExists('subjects');
    }
};
