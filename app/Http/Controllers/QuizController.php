<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(){
        $questions = Quiz::all();
        return view('quiz', compact('questions'));
    }

    public function submit(Request $request)
    {
        // Validation logic (not shown for brevity)

        $answers = $request->input('answers');
        $correctAnswers = Quiz::pluck('correct_option', 'id')->toArray();

        $score = 0;
        foreach ($answers as $questionId => $selectedOption) {
            if ($correctAnswers[$questionId] === $selectedOption) {
                $score++;
            }
        } 

        return view('quiz_result', compact('score', 'correctAnswers'));
    }
}
