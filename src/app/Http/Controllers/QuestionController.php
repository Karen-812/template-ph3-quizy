<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class QuestionController extends Controller
{
    public function index(Request $request, $password)
    {
        $user = Auth::user();
        $items = Question::all();
        $param = ['items' => $items, 'user' => $user];
        return view('question.index', $param);
        return $this->create([
            'password'     => Hash::make($password),
        ]);
    }
}
