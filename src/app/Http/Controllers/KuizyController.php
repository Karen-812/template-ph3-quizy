<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
        public function index(Request $request, Response $response){
            $html = <<<EOF
            <html>
            <head>
            <title>Hello/Index</title>
            </head>
            <body>
                <h1>Hello</h1>
                <h3>Request</h3>
                <pre>{$request}</pre>
                <h3>Response</h3>
                <pre>{$response}</pre>
            </body>
            </html>
            EOF;
                    $response -> setContent($html);
                    return $response;
        }
}

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
            $data = [
                'title' => '東京の難読地名クイズ',
                'question' => '1.この地名はなんて読む？',
                'choice1' => 'こうわ',
                'choice2' => 'たかわ',
                'choice3' => 'たかなわ',
            ];
            return view('kuizy.kuizy_quiz', $data);
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
