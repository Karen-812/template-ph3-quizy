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
            <input size="40" type="text" name="big_questions[{{ $item->id }}][title]" value="{{ $item->name }}"></input>
            <a href="/kuizy/admin/delete/?id={{ $item->id }}">削除</a>
            <p>順番を変更する
                <select name="big_questions[{{ $item->id }}][order]" id="">
                    @foreach(range(1, $count) as $num)
                    <option value="{{ $num }}" 
                        @if($num === $item->order)
                        selected
                        @endif>
                        {{$num}} 番目
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
