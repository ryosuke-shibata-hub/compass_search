@extends('Auth.layouts.common')
@section('title', 'Added')
@include('Auth.layouts.header')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h2 class="text-center pt-5 pb-5">登録が完了しました</h2>
      <h2 class="text-center pt-5 pb-5">ようこそ</h2>
      <h1 class="text-center pt-5 pb-5">{{ session('firstname') }}さん！</h1>

      <div class="text-center pt-5 pb-5">
        <a type="submit" href="{{ route('login') }}"
            class="btn btn-primary">こちらからログインしてください！
      </a>
      </div>

    </div>
  </div>
</div>
@endsection
@include('Auth.layouts.footer')
