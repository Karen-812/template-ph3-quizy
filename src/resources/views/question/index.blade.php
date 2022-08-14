@extends('layouts.kuizy')

@section('title', 'Question.index')

@section('menubar')
    @foreach($big_items as $item)
    <li>
        {{ $item -> name }}
    </li>
    @endforeach
@endsection

@section('question')
    <ul>
        @foreach($big_items as $item)
        @foreach($item->choices as $choice)
        <li>
            {{ $choice -> choices }}
        </li>
        @endforeach
        @endforeach

    </ul>
@endsection