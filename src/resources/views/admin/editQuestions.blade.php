@extends('layouts.kuizy')

@section('title')
@foreach($big_items as $big_item)
<h1> {{ $big_item -> name }}</h1>
@section('menubar')
<a href="/kuizy/admin/add">タイトル一覧へ戻る</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
<!-- action="/upload" -->
    <ul class="choices">
        @foreach($big_item->questions as $question_item)
        <li>
            <img src="{{$question_item->image}}" alt=""> 
        </li>
        <a href="/kuizy/admin/editQuestion/delete/?id={{$bq_id}}&q_id={{ $question_item->id }}">削除</a>
        <input type="file" name="image[{{ $question_item->id }}]">
        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
</form>
@endsection
@endforeach
