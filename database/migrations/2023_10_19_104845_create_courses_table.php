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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->enum('course_type',['recorded', 'live']);
            $table->integer('category_id');
            $table->string('category_name');
            $table->integer('teacher_id');
            $table->string('teacher_name');
            $table->integer('price');
            $table->text('course_summary');
            $table->string('course_img');
            $table->text('course_description');
            $table->text('course_learnop');
            $table->text('course_requirment');
            $table->integer('lesson_count')->default(0);
            $table->integer('course_duration')->default(0);
            $table->string('intro_link');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
