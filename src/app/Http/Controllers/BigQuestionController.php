<?php

namespace App\Http\Controllers;

use App\Models\BigQuestion;
use Illuminate\Http\Request;

class BigQuestionController extends Controller
{
    public function index(Request $request)
    {
        $big_items = BigQuestion::with('questions.choices')->get();
        return view('question.index', ['big_items' => $big_items]);
    }
}
