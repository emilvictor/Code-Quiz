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

        // $msg = $quiz->$id['answers'][1]['answer'][0][$request->answer1];


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

        error_log($score);



        // Skicka in score i databas



        $userScore = new UserScores();
        $userScore->user_id = Auth::id();
        $userScore->quiz_id = $id;
        $userScore->score = $score;

        $userScore->save();

        // dd($id);


        // $user = UserScore::create([
        //     "user_id" => Auth::id(),
        //     "quiz_id" => $id,
        //     "score" => $score,
        // ]);


        // $this->validate($request, [
        //     'name' => 'required|string',
        //     'image' => 'required|string',
        // ]);

        // $favorite = new Favorite();
        // $favorite->user_id = Auth::id();
        // $favorite->name = $request->input('name');
        // $favorite->image = $request->input('image');
        // $favorite->save();

        // return back();


        // Returnera på result/

        return view('/result')->with('quizid', $id)->with('request', $request);
    }
}
