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
            $questionWithChoices = DB::table('questions')->join('choices', 'choices.question_id', '=', 'questions.id')
                                ->where('choices.big_question_id', '=', 1)
                                ->get()
                                ->groupBy('question_id');
            // dd($questionWithChoices);

            return view('kuizy.kuizy', ['questionWithChoices' => $questionWithChoices]);
        }
        public function quiz2(){
            $questionWithChoices = DB::table('questions')->join('choices', 'choices.question_id', '=', 'questions.id')
            ->where('choices.big_question_id', '=', 2)
            ->get()
            ->groupBy('question_id');

            return view('kuizy.kuizy', ['questionWithChoices' => $questionWithChoices]);
        }
}
