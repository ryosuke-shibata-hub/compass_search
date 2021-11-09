@extends('template')

<link rel="stylesheet" href="{{ asset('/css/register.css') }}">

@section('login')
<div class="contents">
  <div class="title">
  ユーザー登録
  </div>
  {{ Form::open() }}
  <div class="user_data_1">
    @if ($errors->any())
    <div class="alert">
        <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red; font-size: 14px;">{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="username">
      {{ Form::label('ユーザー名(姓、名)',null,['class'=>'form_block']) }}
    {{ Form::text('first_name',null,['class'=>'name']) }}
    {{ Form::text('last_name',null,['class'=>'name']) }}
    </div>
    <div class=username_katakana>
      {{ Form::label('ユーザー名(セイ、メイ)',null,['class'=>'form_block']) }}
    {{ Form::text('first_name_kana',null,['class'=>'name']) }}
    {{ Form::text('last_name_kana',null,['class'=>'name']) }}
    </div>
    <div class="birthday">
      {{ Form::label('誕生日(年、月、日)',null,['class'=>'form_block_date']) }}
    {{ Form::text('birthday_year',null,['class'=>'birthday']) }}
    {{ Form::text('birthday_month',null,['class'=>'birthday']) }}
    {{ Form::text('birthday_day',null,['class'=>'birthday']) }}
    </div>
    <div class="admission_date">
      {{ Form::label('入学日(年、月、日)',null,['class'=>'form_block_date']) }}
    {{ Form::text('admission_date_year',null,['class'=>'admission_date']) }}
    {{ Form::text('admission_date_month',null,['class'=>'admission_date']) }}
    {{ Form::text('admission_date_day',null,['class'=>'admission_date']) }}
    </div>
    {{ Form::label('男性',null,['class'=>'genders']) }}
    {{ Form::radio('gender','0',false,['class'=>'input']) }}
    {{ Form::label('女性',null,['class'=>'genders']) }}
    {{ Form::radio('gender','1',false,['class'=>'input']) }}
    {{ Form::label('メールアドレス',null,['class'=>'email']) }}
    {{ Form::email('email',null,['class'=>'input']) }}
    {{ Form::label('パスワード') }}
    {{ Form::password('password',null,['class'=>'input']) }}
      {{ Form::label('パスワード(確認)') }}
    {{ Form::password('password_comfirm',null,['class'=>'input']) }}
    {{ Form::label('国語教師',null,['class'=>'roles']) }}
    {{ Form::radio('role','0',false,['class'=>'input']) }}
    {{ Form::label('数学教師',null,['class'=>'roles']) }}
    {{ Form::radio('role','5',false,['class'=>'input']) }}
     {{ Form::label('生徒',null,['class'=>'roles']) }}
    {{ Form::radio('role','10',false,['class'=>'input']) }}
    <div class="japanese_language_teacher_name">
      <p class="teacher">国語講師担当者</p>
      {{ Form::label('国語次郎',null,['class'=>'5']) }}
      {{ Form::radio('teacher','teacher_name',false,['class'=>'input']) }}
      {{ Form::label('国語四郎',null,['class'=>'5']) }}
      {{ Form::radio('teacher','teacher_name',false,['class'=>'input']) }}
    </div>
    <div class="math_teacher_name">
      <p class="teacher">数学講師担当者</p>
      {{ Form::label('数学次郎',null,['class'=>'math_teacher']) }}
      {{ Form::radio('teacher','teacher_name',false,['class'=>'input']) }}
      {{ Form::label('数学四郎',null,['class'=>'math_teacher']) }}
      {{ Form::radio('teacher','teacher_name',false,['class'=>'input']) }}
    </div>

    <div class="submit">
      {{ Form::submit('登録',['class'=>'success']) }}
    </div>
  </div>


  {{ Form::close() }}


</div>
@endsection
