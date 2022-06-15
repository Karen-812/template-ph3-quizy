<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function  index()
    {
        return <<<EOF

        <html>
        <head>
            <title>Hello/Index</title>
        </head>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラのindexアクションです。</p>
        </body>
        </html>
        EOF;
    }
}
