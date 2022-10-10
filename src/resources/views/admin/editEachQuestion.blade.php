@extends('layouts.kuizy')

@section('title', '亀戸')
@section('menubar')
<a href="/kuizy/admin/add">タイトル一覧へ戻る</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
<!-- action="/upload" -->
    <ul class="choices">
        @foreach($items->choices as $choice_item)
        <li>
            {{$choice_item->choices}}
        </li>
        <a href="/kuizy/admin/editQuestion/delete/?id={{$bq_id}}&q_id={{ $choice_item->id }}">削除</a>
        <input type="file" name="image[{{ $choice_item->id }}]">
                <input type="file" name="image[{{ $choice_item->id }}]">

        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
</form>
@endsection

