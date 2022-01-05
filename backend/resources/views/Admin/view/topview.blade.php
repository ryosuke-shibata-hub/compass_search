@extends('Admin.layouts.common')
@section('title', 'Compass')
@include('Admin.layouts.header')
@section('content')
<div class="main">
    <div class="container">
      <h2 class="pt-5 pb-5">ユーザー一覧</h2>
      <a class="open-btn" href="#serach">
        <i class="fas fa-search"></i>
        詳細検索
      </a>
      <section id="search">
        <h2>てすと</h2>
      </section>
      <tbody>
        @foreach($user_list as $list)
        <div class="user_content">
          <div class="row">
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
              @foreach($list->japanese_language as $teacher)
                @if(strpos($teacher->user_id,$list->user_id) !== false)
                担当国語教師:{{ $teacher->username }}
                @endif
              @endforeach
                <br>
              @foreach($list->math_teacher as $teacher)
                @if(strpos($teacher->user_id,$list->user_id) !== false)
                担当数学教師:{{ $teacher->username }}
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
          </div>
        </div>
      @endforeach
      </tbody>
      <div class="paginate">
        {{ $user_list->links('pagination::bootstrap-4') }}
      </div>
    </div>
</div>
@endsection
@include('Admin.layouts.footer')
