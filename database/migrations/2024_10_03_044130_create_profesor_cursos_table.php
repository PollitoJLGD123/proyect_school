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
        Schema::create('profesor_cursos', function (Blueprint $table) {
            $table->foreignId('id_docente_asignado')->references('id_docente_asignado')->on('docente_asignado')->onDelete('cascade'); 
            $table->foreignId('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade'); 
            $table->primary(['id_docente_asignado', 'id_curso']);  
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_cursos');
    }
};
