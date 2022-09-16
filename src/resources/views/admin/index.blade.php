@extends('layouts.kuizy')

@section('title')

@section('menubar')
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <ul>
        @foreach($items as $item)
        <li>{{ $item->name }}</li>
        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="text" name="title">
    <input type="submit" value="追加">
</form>
@endsection


