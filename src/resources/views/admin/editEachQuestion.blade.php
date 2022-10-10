@extends('layouts.kuizy')

@section('title', '亀戸')
@section('menubar')
<a href="/kuizy/admin/add">タイトル一覧へ戻る</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
<!-- action="/upload" -->
<ul class="choices">
    <input type="file" name="image{{$bq_id}}_{{$q_id}}">
    @foreach($items->choices as $choice_item)
        <li>
            <input size="30" type="text" name="choices[{{ $choice_item->id }}][title]" value="{{$choice_item->choices}}"></input>
            <!-- 正解か不正解か管理するボタン追加 -->
            <a href="/kuizy/admin/editQuestion/delete/?id={{$bq_id}}&q_id={{ $choice_item->id }}">削除</a>
        </li>
        @endforeach
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="更新">
</form>
@endsection
