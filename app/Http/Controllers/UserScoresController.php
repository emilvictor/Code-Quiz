<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserScoresController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //
    public function __invoke(Request $request)
    {
        $userId = auth()->user()->id;

        $user = User::find($userId);

        return view('history')->with('scores', $user->scores);
    }
}
