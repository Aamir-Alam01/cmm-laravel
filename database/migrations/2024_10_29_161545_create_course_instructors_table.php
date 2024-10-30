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
        Schema::create('course_instructor', function (Blueprint $table) {
            $table->id();
            
            // Foreign key column for course_id
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')
                  ->onDelete('cascade')->onUpdate('cascade');
            
            // Foreign key column for instructor_id
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructors')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_instructor');
    }
};
