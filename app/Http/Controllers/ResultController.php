<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        return view('result')->with($request);
    }
}
