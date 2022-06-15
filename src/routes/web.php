<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
$html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
    <p>This is a sample page.</p>
    <p>これは、サンプルで作ったページです</p>
</body>
</html>
EOF;

Route::get('hello', function () use ($html){
    return $html;
});