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
        Schema::create('student_extracurricular', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
            $table->unsignedBigInteger('exctracurriculars_id');
            $table->foreign('exctracurriculars_id')->references('id')->on('exctracurriculars')->onDelete('restrict');
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_extracurricular');
        $table->dropForeign(['student_id']);
        $table->dropColumn('student_id');
        $table->dropForeign(['exctracurriculars_id']);
        $table->dropColumn('exctracurriculars_id');
    }
};
