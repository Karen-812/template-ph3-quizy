@extends('layouts.kuizy')

@section('title', "新規追加")
@section('menubar')
<a href="/kuizy/admin/editQuestion/?id={{ $bq_id }}">戻る</a>
@endsection

@section('question')

<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    <!-- action="/upload" -->
    <ul class="choices">
        <li>イメージを追加する</li>
        <input type="file" name="newImage">
        <li>
            <input size="30" type="text" name="choices{{$bq_id}}_0" value=""></input>
            <!-- 正解か不正解か管理するボタン追加 -->
        </li>
        <li>
            <input size="30" type="text" name="choices{{$bq_id}}_1" value=""></input>
        </li>
        <li>
            <input size="30" type="text" name="choices{{$bq_id}}_2" value=""></input>
        </li>
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="submit" value="作成">
</form>
@endsection