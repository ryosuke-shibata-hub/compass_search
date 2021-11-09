@extends('template')

<link rel="stylesheet" href="{{  asset('/css/registerAdded.css') }}">

@section('login')

<div class="contents">
  <p class="title">
    登録ありがとうございます
  </p>
  <div class="return_login">
    <a class="added" type="button" href="/login">ログイン画面へ</a>


  </div>
</div>
@endsection
