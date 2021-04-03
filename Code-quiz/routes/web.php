<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
});
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::post('register', RegisterController::class);
Route::view('/register', 'authentication/register');
// Route::get('php_quiz', PhpQuizController::class);



// vanligt a href=view
