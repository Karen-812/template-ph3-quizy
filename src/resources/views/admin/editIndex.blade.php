@extends('layouts.kuizy')

@section('title', '編集画面')

@section('menubar')
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <ul>
        @foreach($items as $item)
        <li>
            <input type="text" name="titles[{{ $item->id }}]" value = "{{ $item->name }}"></input>
        </li>
        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
</form>
@endsection


