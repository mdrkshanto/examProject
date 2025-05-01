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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('img')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        Schema::create('questions',function (Blueprint $table){
            $table->id();
            $table->foreignId('exam')->constrained('exams','id');
            $table->string('question');
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        Schema::create('question_options', function (Blueprint $table){
            $table->id();
            $table->foreignId('question')->constrained('questions','id');
            $table->string('option');
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
        Schema::table('questions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('exam');
        });
        Schema::dropIfExists('questions');
        Schema::table('question_options', function (Blueprint $table) {
            $table->dropConstrainedForeignId('question');
        });
        Schema::dropIfExists('question_options');
    }
};
