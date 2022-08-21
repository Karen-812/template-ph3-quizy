@extends('layouts.kuizy')

@section('title')
@foreach($big_items as $item)
<h1> {{ $item -> name }}</h1>
@section('menubar')
@endsection

@section('question')
@foreach($item->questions as $question)
<img src="{{ $question->image }}" alt="">
<ul class="choices">
    @foreach($question->choices as $choice)
    @if ($choice->is_correct == true)
        <li onclick="isCorrect('choice_{{$choice->question_id}}_correct','choice_{{$choice->question_id}}')" id="choice_{{$choice->question_id}}_correct" class="choice">{{ $choice -> choices }}</li>
    @elseif($choice->is_correct == false)
        <li onclick="isCorrect('choice_{{$choice->question_id}}_wrong{{$loop->iteration}}','choice_{{$choice->question_id}}')" id="choice_{{$choice->question_id}}_wrong{{$loop->iteration}}" class="choice">{{ $choice -> choices }}</li>
    @endif
    @endforeach
</ul>
@endforeach
@endforeach
@endsection
