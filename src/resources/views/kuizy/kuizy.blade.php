@extends('layouts.kuizy')


        @section('head', $quiz1)
        @section('title', $quiz1)
        @section('menubar')
            <li><a href="{{route('Kuizy.tokyo')}}">{{$quiz1}}</a></li>
            <li><a href="{{route('Kuizy.hiroshima')}}">{{$quiz2}}</a></li>
        @endsection
        @section('question')
        @foreach($questionWithChoices as $question_num => $questionWithChoice)
        <img src="{{ $questionWithChoice->first()->image }}" alt="">
        <ul class="choices">
            @foreach($questionWithChoice as $choice_num => $Choice)
            @if ($Choice->is_correct == 1)
            <li onclick="isCorrect('choice_{{$question_num}}_correct','choice_{{$question_num}}')" id="choice_{{$question_num}}_correct" class="choice">{{ $Choice->choices }}</li>
            @elseif($Choice->is_correct == 0)
            <li onclick="isCorrect('choice_{{$question_num}}_wrong{{$loop->iteration}}','choice_{{$question_num}}')" id="choice_{{$question_num}}_wrong{{$loop->iteration}}" class="choice">{{ $Choice->choices }}</li>
            @endif
            @endforeach
        </ul>
        @endforeach
        @endsection
