@extends('layouts.kuizy')

@section('title')
@foreach($big_items as $big_item)
<h1> {{ $big_item -> name }}</h1>

@section('menubar')
<a href="/kuizy/admin/add">タイトル一覧へ戻る</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <ul class="choices">
        @foreach($items as $question_item)
        <li>
            <img src="{{$question_item->image}}" alt=""> 
        </li>
        <a href="/kuizy/admin/editEachQuestion/?id={{$bq_id}}&q_id={{ $question_item->id }}">編集|</a>
        <a href="/kuizy/admin/editQuestion/delete/?id={{$bq_id}}&q_id={{ $question_item->id }}">削除</a>

        <p>順番を変更する
                <select name="orders[{{ $question_item->id }}]" id="">
                    @foreach(range(1, $count) as $num)
                    <option value="{{ $num }}" 
                        @if($num === $question_item->order)
                        selected
                        @endif>
                        {{$num}} 番目
                    </option>
                    @endforeach
                </select>
        </p>
        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
    <input type="hidden" name="bq_id" value="{{$bq_id}}">
    <a href="/kuizy/admin/addNewQuestion/?id={{$bq_id}}">新規追加</a>
</form>
@endsection
@endforeach
