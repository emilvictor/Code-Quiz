<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quiz;
use App\Models\UserScores;

class ResultController extends Controller
{
    //

    public function __invoke(Request $request, $id)
    {
        $this->validate($request, [
            'answer1' => 'required|string',
            'answer2' => 'required|string',
            'answer3' => 'required|string',
            'answer4' => 'required|string',
            'answer5' => 'required|string',
        ]);

        $quiz = Quiz::all();

        $number = 1;
        $score = 0;

        $userAnswers = $request->all();
        array_shift($userAnswers);

        foreach ($userAnswers as $userAnswer) {
            error_log($userAnswer);
            foreach ($quiz->$id['answers'] as $answers) {
                if ($number === $answers['id']) {
                    foreach ($answers['answer'] as $answer) {
                        foreach ($answer as $bool) {
                            if ($bool === true) {
                                $key = key($answer);
                                if ($key === $userAnswer) {
                                    $score++;
                                }
                            }
                        }
                    }
                }
            }
            $number++;
        }

        // Skicka in score i databas

        $userScore = new UserScores();
        $userScore->user_id = Auth::id();
        $userScore->quiz_id = $id;
        $userScore->score = $score;
        $userScore->save();

        return view('/result')->with('quizid', $id)->with('request', $request);
    }
}
