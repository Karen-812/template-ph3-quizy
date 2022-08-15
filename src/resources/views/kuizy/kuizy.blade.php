@extends('layouts.kuizy')

        @section('head', '〇〇の難読地名クイズ')
        @section('title', '〇〇の難読地名クイズ') <!--後で変数に -->
        @section('menubar')
            <li><a href="{{route('Kuizy.tokyo')}}">東京の難読地名クイズ</a></li>
            <li><a href="{{route('Kuizy.hiroshima')}}">広島の難読地名クイズ</a></li>
        @endsection
        @section('question')
        @foreach($questionWithChoices as $question_num => $questionWithChoice)
        <img src="{{ $questionWithChoice->first()->image }}" alt="">
        <ul class="choices">
            @foreach($questionWithChoice as $choice_num => $Choice)
            @if ($Choice->is_correct == true)
            <li onclick="isCorrect('choice_{{$question_num}}_correct','choice_{{$question_num}}')" id="choice_{{$question_num}}_correct" class="choice">{{ $Choice->choices }}</li>
            @elseif($Choice->is_correct == false)
            <li onclick="isCorrect('choice_{{$question_num}}_wrong{{$loop->iteration}}','choice_{{$question_num}}')" id="choice_{{$question_num}}_wrong{{$loop->iteration}}" class="choice">{{ $Choice->choices }}</li>
            @endif
            @endforeach
        </ul>
        @endforeach
        @endsection
