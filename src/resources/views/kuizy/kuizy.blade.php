<?php
/*
@extends('layouts.helloapp')
@section('titele', 'quiz' . $quiz_id)
<!-- 引数の中はphpとして認識されるから波括弧はいらない -->
@section('content')

<?php
// 今まで
//  foreach($quizzes as $quiz_index => $quiz) -->
// と書いてたものが
?>

    <!-- @foreach ($quizzes as $quiz_index => $quiz)
        <h3>{{ $quiz_index + 1 }}.この地名はなんて読む？</h3> -->
        <!-- 問題番号のところ、$loop->iteration使ってもok→＋１しなくてもいい -->
        @foreach ($quizzes as $quiz)
            <h3>{{ $loop->iteration }}.この地名はなんて読む？</h3>
            <ul>
                <!-- controller.phpの中にcollect表記して -->
                $quizzes = collect
                @foreach($quiz['choices'] as $choice)
                <li>{{ $choice }}</li>
                @endforeach
            </ul>
    @endforeach
    @endsection

    */
?>
<h3>{{$msg}}</h3>
    <ul>
        <li><a href="{{route('Kuizy.tokyo')}}">{{$quiz1}}</a></li>
        <li><a href="{{route('Kuizy.hiroshima')}}">{{$quiz2}}</a></li>
    </ul>
