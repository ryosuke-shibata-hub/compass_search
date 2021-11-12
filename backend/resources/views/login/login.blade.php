@extends('template')

<link rel="stylesheet" href="{{ asset('/css/login.css') }}">

@section('login')
<div class="contents">
  <div class="title">
  ログイン
  </div>
  {{ Form::open(['method'=>'post']) }}
    <div class="Form">
      <div class="login_email">
      {{ Form::label('メールアドレス') }}
      {{ Form::text('email',null,['class'=>'input']) }}
    </div>
    <div class="login_pass">
      {{ Form::label('パスワード') }}
      {{ Form::password('password',null,['class'=>'input']) }}
    </div>
    </div>
    <div class="login">
      {{ Form::submit('ログイン') }}
    </div>
    <div class="create_acount">新規ユーザー登録は
      <a href="register">
      こちら</a>
    </div>
  {{ Form::close() }}
</div>


@endsection
