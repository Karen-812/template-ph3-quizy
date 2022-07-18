<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuizyController extends Controller
{
        public function index(Request $request){
            $items = DB::select('select * from people');
            $data = [
                'msg' => 'クイズ一覧',
                'quiz1' => '東京の難読地名クイズ',
                'quiz2' => '広島県の難読地名クイズ',
            ];
            return view('kuizy.kuizy', ['items' => $items], $data);
        }

        public function quiz(){
            $data = [
                'msg' => 'クイズ一覧',
                'quiz1' => '東京の難読地名クイズ',
                'quiz2' => '広島県の難読地名クイズ',
            ];
            return view('kuizy.kuizy', $data);
        }
        public function quiz1(){
            $questions = DB::table('questions')->get();
            // dd($questions);
            $choices = DB::table('choices')->get();
            // dd($choices);
            $questionWithChoices = DB::table('questions')->join('choices', 'choices.question_id', '=', 'questions.id')
                                ->where('choices.big_question_id', '=', 1)
                                ->get()
                                ->groupBy('question_id');
            // dd($questionWithChoices);
            $data = [
                'msg' => 'クイズ一覧',
                'quiz1' => '東京の難読地名クイズ',
                'quiz2' => '広島県の難読地名クイズ',
                'questions' => $questions,
                'choices' => $choices,
                'questionWithChoices' => $questionWithChoices,
            ];
            return view('kuizy.kuizy', $data);
        }
        public function quiz2(){
            $data = [
                'title' => '広島の難読地名クイズ',
                'question' => '1.この地名はなんて読む？',
                'choice1' => '',
                'choice2' => '',
                'choice3' => '',
            ];
            return view('kuizy.kuizy_quiz', $data);
        }
}
