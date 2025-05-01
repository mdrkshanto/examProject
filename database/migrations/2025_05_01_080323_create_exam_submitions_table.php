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
        Schema::create('exam_submitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->constrained('users','id');
            $table->foreignId('exam')->constrained('exams','id');
            $table->foreignId('question')->constrained('questions','id');
            $table->foreignId('question_option')->constrained('question_options','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_submitions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user');
            $table->dropConstrainedForeignId('exam');
            $table->dropConstrainedForeignId('question');
            $table->dropConstrainedForeignId('question_option');
        });
        Schema::dropIfExists('exam_submitions');
    }
};
