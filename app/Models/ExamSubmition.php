<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamSubmition extends Model
{
    protected $guarded = ['id'];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function getExam()
    {
        return $this->belongsTo(Exam::class, 'exam', 'id');
    }

    public function getQuestion()
    {
        return $this->belongsTo(Question::class, 'question', 'id');
    }

    public function getQuestionOption()
    {
        return $this->belongsTo(QuestionOption::class, 'question_option', 'id');
    }
}
