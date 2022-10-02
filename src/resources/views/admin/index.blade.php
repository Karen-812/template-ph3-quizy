@extends('layouts.kuizy')

@section('title', '追加画面')
@section('menubar')
<a href="/kuizy/admin/edit">編集画面へ</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <ol>
        @foreach($items as $item)
        <li><a href="/kuizy/admin/editQuestion/?id={{ $item->id }}">
        {{ $item->name }}
        </a></li>
        @endforeach
    </ol>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input size="40" type="text" name="title" value="新しいタイトルをここに追加">
    <input type="submit" value="追加">
</form>
@endsection


