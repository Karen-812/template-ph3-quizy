<?php

namespace App\Http\Controllers;

use App\Big_question;
use Illuminate\Http\Request;

class Big_questionController extends Controller
{
    public function index(Request $request)
    {
        $big_items = Big_question::with('questions.choices')->get();
        return view('question.index', ['big_items' => $big_items]);
    }
}
