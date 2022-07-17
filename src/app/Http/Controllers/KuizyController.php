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
            $choices = DB::table('choices')->get();
            $questionWithChoices = DB::('questions')->join('choices', 'choices.??', '??', 'questions.??')
                                ->where('big_question_id', '=', 1)
                                ->get()
                                ->groupBy('???');
            $data = [
                'msg' => 'クイズ一覧',
                'quiz1' => '東京の難読地名クイズ',
                'quiz2' => '広島県の難読地名クイズ',
                'questions' => $questions,
                'choices' => $choices,
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
