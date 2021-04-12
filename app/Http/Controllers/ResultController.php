<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quiz;

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

        // $msg = $quiz->$id['answers'][1]['answer'][0][$request->answer1];


        $number = 1;
        $score = 0;


        $userAnswers = $request->all();

        array_shift($userAnswers);
        // error_log(print_r($userAnswers, TRUE));

        foreach ($userAnswers as $userAnswer) {
            error_log($userAnswer);
            foreach ($quiz->$id['answers'] as $answers) {

                if ($number === $answers['id']) {
                    // error_log('yes');
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

        error_log($score);




        return view('/result')->with('quizid', $id)->with('request', $request);
    }
}
