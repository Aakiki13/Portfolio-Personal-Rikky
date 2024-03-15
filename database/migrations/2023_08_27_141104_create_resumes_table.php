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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();

            $table->string('experience_title');
            $table->text('experience_description');
            $table->date('experience_start_date'); // Tanggal mulai
            $table->date('experience_end_date'); // Tanggal akhir

            $table->string('education_title');
            $table->text('education_description');
            $table->date('education_start_date'); // Tanggal mulai
            $table->date('education_end_date'); // Tanggal akhir

            $table->text('professional_skills');
            $table->text('languages');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
