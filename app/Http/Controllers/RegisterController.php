<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|string|min:10|max:50',
            'password' => 'required',
        ]);
        $user = User::create([
            "name" => $request->post('name'),
            "email" => $request->post('email'),
            "password" => Hash::make($request->post('password')),

        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        return redirect('/dashboard');


    //     auth()->login($user);
    //     return redirect()->to('/dashboard');
       }
}
