<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamSubmition;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use function Laravel\Pail\ValueObjects\authId;

class ExamController extends Controller
{
    public function index()
    {
        return view('exam.list.index', ['exams' => Exam::get()]);
    }

    public function detail($id)
    {
        return view('exam.detail.index', ['exam' => Exam::with('questions')->find($id)]);
    }

    public function start($exam, $question = null)
    {
        $questions = Question::where('exam', $exam)->when($question, function ($q) use (&$question) {
            $q->where('id', $question);
        })->with(['exam' => function ($ex) use ($exam) {
            $ex->where('id', $exam);
        }, 'questionOptions'])->get();
        return view('exam.start.index', ['questions' => $questions]);
    }

    public function submit(Request $request, $question)
    {
        $request->validate([
            'answer' => 'required|integer'
        ], [
            'answer.required' => 'The option field is required.',
            'answer.integer' => 'The option field must be an integer.',
        ]);
        $question = Question::with(['questionOptions', 'exam'])->find($question);
        $option = $question->questionOptions()->where('id', $request->answer)->first();
        if (!isset($option)) {
            throw ValidationException::withMessages(['answer' => 'Invalid option.']);
        }

        $exmSub = ExamSubmition::create([
            'user' => auth()->id(),
            'exam' => $question->exam,
            'question' => $question->id,
            'question_option' => $option->id,
        ]);
        $examSubmit = ExamSubmition::with(['getUser', 'getExam', 'getQuestion', 'getQuestionOption'])->find($exmSub->id);
        return redirect()->route('exam.result',['exam' => $examSubmit->exam]);
    }

    public function result($exam)
    {
        $examSubmit = ExamSubmition::with(['getUser', 'getExam', 'getQuestion', 'getQuestionOption'])->where('user', auth()->id())->where('exam', $exam)->get();
        return view('exam.result.index',['examSubmits'=>$examSubmit]);
    }
}
