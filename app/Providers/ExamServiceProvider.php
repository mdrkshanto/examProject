<?php

namespace App\Providers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ExamServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        if (Exam::count() >= 1) {
            Exam::truncate();
            Question::truncate();
            QuestionOption::truncate();
        }
        if (Exam::count() < 1) {
            $exam = Exam::create([
                'title' => 'Exam 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur hic laborum minus, molestias mollitia, optio porro quo recusandae repellat similique, sit veniam? Consectetur nostrum possimus voluptatum! Dolore, explicabo sint?',
            ]);
            $question = Question::create([
                'exam' => $exam->id,
                'question' => 'Question 1',
            ]);
            $datas = [
                [
                    'question' => $question->id,
                    'option' => 'Option 1',
                ], [
                    'question' => $question->id,
                    'option' => 'Option 2',
                    'is_correct' => true,
                ], [
                    'question' => $question->id,
                    'option' => 'Option 3',
                ], [
                    'question' => $question->id,
                    'option' => 'Option 4',
                ]
            ];
            foreach ($datas as $data) {
                QuestionOption::create($data);
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
