<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserScoresController;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/index');
})->middleware('guest');
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::post('register', RegisterController::class);
Route::view('/register', 'authentication/register');

Route::get('quiz/{id}', 'App\Http\Controllers\QuizController@show');
Route::post('quiz/{id}/result', ResultController::class)->middleware('auth');
Route::get('history', UserScoresController::class)->middleware('auth');

// Route::resource('test', QuizController::class);
