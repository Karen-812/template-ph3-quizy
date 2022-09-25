@extends('layouts.kuizy')

@section('title', '編集画面')

@section('menubar')
<a href="/kuizy/admin/add">新規追加画面へ</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <ol>
        @foreach($items as $item)
        <li>
            <input size="40" type="text" name="titles[{{ $item->id }}]" value = "{{ $item->name }}"></input>
            <a href="/kuizy/admin/delete/?id={{ $item->id }}">削除</a>
            <p>順番を変更する 
                <select name="order{{ $item->id }}" id="">
                    @foreach($items as $item)
                    <option value="{{ $item->id }}">
                        {{$item->id}}番目
                    </option>
                    @endforeach
                </select>
            </p>
        </li>
        @endforeach
    </ol>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
</form>
@endsection
