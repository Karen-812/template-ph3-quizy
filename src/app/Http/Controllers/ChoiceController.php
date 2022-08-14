<?php

namespace App\Http\Controllers;

use App\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function index(Request $request)
    {
        $choices = Choice::all();
        return view('question.index', ['choices' => $choices]);
    }
}
