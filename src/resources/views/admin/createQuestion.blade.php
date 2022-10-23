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
        <input type="file" name="image">
        <li>
            <input size="30" type="text" name="choices[1][name]" value=""></input>
            <label><input type="radio" name="choices[1][valid]" value="1">正解</label>
            <label><input type="radio" name="choices[1][valid]" value="0">不正解</label>
        </li>
        <li>
            <input size="30" type="text" name="choices[2][name]" value=""></input>
            <label><input type="radio" name="choices[2][valid]" value="1">正解</label>
            <label><input type="radio" name="choices[2][valid]" value="0">不正解</label>
        </li>
        <li>
            <input size="30" type="text" name="choices[3][name]" value=""></input>
            <label><input type="radio" name="choices[3][valid]" value="1">正解</label>
            <label><input type="radio" name="choices[3][valid]" value="0">不正解</label>
        </li>
    </ul>
    @csrf
    <!-- @csrf Bladeディレクティブを使用して、非表示のトークン入力フィールドを生成できます。 -->
    <input type="hidden" name="id" value="{{$bq_id}}">
    <input type="submit" value="作成">
</form>
@endsection