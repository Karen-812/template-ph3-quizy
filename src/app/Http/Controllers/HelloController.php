<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class HelloController extends Controller
{
        public function index(Request $request, Response $response){
            $user = Auth::user();
            $items = DB::select('select * from people');
            $param = ['items' => $items, 'user' => $user];
            return view('hello.index', $param);
        }
}
