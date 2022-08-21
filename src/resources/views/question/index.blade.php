@extends('layouts.kuizy')

@section('title')
@foreach($big_items as $item)
    <h1> {{ $item -> name }}</h1>
@section('menubar')
@endsection

@section('question')
@foreach($item->questions as $question)
    <img src="{{ $question->image }}" alt="">
    <ul>
        @foreach($item->choices as $choice)
        <li>
            {{ $choice -> choices }}
        </li>
        @endforeach
    </ul>
    @endforeach
    @endforeach
@endsection
