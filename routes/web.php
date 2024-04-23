<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RockPaperScissorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);


Route::get('/', [RockPaperScissorsController::class, 'index'])->name('home');
Route::post('/play', [RockPaperScissorsController::class, 'play'])->name('play');
