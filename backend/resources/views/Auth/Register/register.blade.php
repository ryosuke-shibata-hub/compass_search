@extends('layouts.common')
@section('title', 'Register')
@include('layouts.header')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h1 class="text-center pt-5 pb-5">Register New User</h1>
      <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group pb-3" style="margin-left: 32%">
          <label for="">ユーザー名(姓 名)</label>
          <br>
          <input type="text" name="firstname" placeholder="姓">
          <input type="text" name="lastname" placeholder="名">
        </div>
        <div class="form-group w-50 pb-3" style="margin-left: 32%">
          <label for="username_kana">ユーザーメイ(セイ メイ)</label>
          <br>
          <input type="text" name="firstname_kana" placeholder="セイ">
          <input type="text" name="lastname_kana" placeholder="メイ">
        </div>
        <div class="form-group pb-3" style="margin-left: 32%">
          <label for="username">生年月日</label>
          <br>
          <input type="text" name="birthday_year" placeholder="年"
                  style="width: 50px;">
          <input type="text" name="birthday_month" placeholder="月"
                  style="width: 165px;">
          <input type="text" name="birthday_day" placeholder="日"
                  style="width: 170px;">
        </div>
        <div class="form-group pb-3" style="margin-left: 32%">
          <label for="admission_data">入学日</label>
          <br>
          <input type="text" name="admission_year" placeholder="年"
                  style="width: 50px;">
          <input type="text" name="admission_month" placeholder="月"
                  style="width: 165px;">
          <input type="text" name="admission_day" placeholder="日"
                  style="width: 170px;">
        </div>
        <div class="form-group pb-3" style="margin-left: 32%">
          <label for="gender">男性</label>
          <input type="radio" name="gender" value="1">
          <label for="gender">女性</label>
          <input type="radio" name="gender" value="2">
        </div>
        <div class="form-group pb-5" style="margin-left: 32%">
          <label for="email">メールアドレス</label>
          <input type="email" name="email" class="form-control"
                  style="width: 55%;">
        </div>
        <div class="form-group pb-5" style="margin-left: 32%">
          <label for="password">パスワード</label>
          <input type="password" name="password" class="form-control"
                  style="width: 55%;">
        </div>
        <div class="form-grou pb-5" style="margin-left: 32%">
          <label for="password_confirmed">パスワード確認</label>
          <input type="password" name="password_confirmed" class="form-control"
                  style="width: 55%;">
        </div>
         <div class="form-group pb-3" style="margin-left: 32%">
          <label for="role">国語講師</label>
          <input type="radio" name="role" value="0">
          <label for="role">数学講師</label>
          <input type="radio" name="role" value="5">
          <label for="role">生徒</label>
          <input type="radio" name="role" value="10">
        </div>

        <button type="submit" class="btn btn-primary"
                  style="margin-left: 63%">登録
        </button>
      </form>
      <a type="submit" class="btn btn-danger"
                style="margin-left: 32%; margin-top:-60px"
                href="{{ route('login') }}">戻る</a>
    </div>
  </div>
</div>
@endsection
@include('layouts.footer')
