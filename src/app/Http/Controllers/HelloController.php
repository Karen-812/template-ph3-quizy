<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller
{
        public function __invoke(){
            return <<<EOF
            <html>
            <head>
            <title>Hello</title>
            </head>
            <body>
                <h1>Single Action</h1>
                <p>これは、シングルアクションコントローラのアクションです。</p>
            </body>
            </html>
            EOF;
        }
}

