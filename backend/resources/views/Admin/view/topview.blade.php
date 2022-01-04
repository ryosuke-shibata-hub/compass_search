@extends('Admin.layouts.common')
@section('title', 'Compass')
@include('Admin.layouts.header')
@section('content')
<div class="main">
  <div id="wrapper">
    <div class="container">
      <h2 class="pb-5">ユーザー一覧</h2>
      <tbody>
        @foreach($user_list as $list)
        <ul>
          <li>
            {{ $list->username }}
            @if($list->gender == 0)
            男性
            @else
            女性
            @endif
            {{ $list->birthday->age }}歳
            <br>
            誕生日:{{ $list->birthday->format('Y年m月d日') }}
            <br>
            入学日:{{ $list->admission_date->format('Y年m月d日') }}
            <br>
            @foreach($list->teacher as $teacher)
              @if(strpos($teacher->user_id,$list->user_id) !== false)
              担当国語教師:{{ $teacher->japanese_language_user_id }}
              <br>
              担当数学教師:{{ $teacher->math_teacher_user_id }}
              <br>
              @endif
            @endforeach
            @foreach($list->score as $score)
            点数:{{ $score->score }}点
            @endforeach
            <br>
            @if($list->role == 0)
            権限:国語教師
            @elseif($list->role == 5)
            権限:数学教師
            @else
            権限:生徒
            @endif
          </li>
        </ul>
      @endforeach
      </tbody>
    </div>
  </div>
</div>
@endsection
@include('Admin.layouts.footer')
