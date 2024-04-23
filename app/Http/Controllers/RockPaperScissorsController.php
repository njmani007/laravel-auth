<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RockPaperScissorsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function play(Request $request)
    // {
    //     $choices = ['rock', 'paper', 'scissors'];
    //     $userChoice = $request->input('choice');
    //     $computerChoice = $choices[array_rand($choices)];

    //     $result = $this->determineWinner($userChoice, $computerChoice);

    //     return view('result', compact('userChoice', 'computerChoice', 'result'));
    // }

    // private function determineWinner($user, $computer)
    // {
    //     if ($user === $computer) {
    //         return 'tie';
    //     }

    //     if (($user === 'rock' && $computer === 'scissors') ||
    //         ($user === 'scissors' && $computer === 'paper') ||
    //         ($user === 'paper' && $computer === 'rock')) {
    //         return 'win';
    //     }

    //     return 'lose';
    // }
}
