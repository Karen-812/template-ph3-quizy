<?php
Route::get('/', function(){
    // getメソッドでアドレスと処理を割り当てる
    return view('welcome');
});

Route::get('hello', function(){
    return '<html><body><h1>Hello</h1><p>This is sample page.
        </p></body></html>';
});

