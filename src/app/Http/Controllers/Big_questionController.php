<?php

namespace App\Http\Controllers;

use App\Big_question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Big_questionController extends Controller
{
    public function index(Request $request)
    {
        $big_items = Big_question::with('questions.choices')->get();
        $user = Auth::user();
        $param = ['big_items' => $big_items, 'user' => $user];
        return view('question.index', $param);
    }
}
