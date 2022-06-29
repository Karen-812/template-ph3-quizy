<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
        public function index(Request $request, Response $response){
            $items = DB::select('select * from people');
            return view('hello.index', ['items' => $items]);
        }
}
