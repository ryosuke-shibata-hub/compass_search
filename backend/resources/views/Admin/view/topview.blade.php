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
            <div class="overlay" id="overlay"></div>
            <div class="modal_window">
                <p class="text-center pt-5">詳細検索</p>
                <a class="close_button">
                    <i class="fas fa-times-circle"></i>
                </a>
                <form action="{{ route('top.index') }}" method="POST">
                    <div class="form-group">
                        <label class="search_title">並び替え:</label>
                        <div class="search_box">
                            <label>名前:</label>
                            <select name="name_sort_desc">
                                <option value="">名前</option>
                                @foreach ($CODE_VALUE as $sort)
                                    {{ $sort->CODE_VALUE }}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="search_title">年齢:</label>
                        <div class="search_box">
                            <label>From</label>
                            <input type="radio" class="input_button" name="from_birthday">
                            <label>〜</label>
                            <label>TO</label>
                            <input type="radio" class="input_button" name="to_birthday">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="search_title">入学日:</label>
                        <div class="search_box">
                            <label>From</label>
                            <input type="radio" class="input_button" name="from_admission">
                            <label>〜</label>
                            <label>TO</label>
                            <input type="radio" class="input_button" name="to_admission">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="search_title">担当数学教師:</label>
                        <div class="search_box">
                            <label>test2</label>
                            <input type="checkbox" class="input_button" name="math_teacher" value="">
                            <label>test</label>
                            <input type="checkbox" class="input_button" name="math_teacher" value="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="search_title">担当国語教師:</label>
                        <div class="search_box">
                            <label>test2</label>
                            <input type="checkbox" class="input_button" name="japanese_language" value="">
                            <label>test</label>
                            <input type="checkbox" class="input_button" name="japanese_language" value="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="search_title">点数:</label>
                        <div class="search_box">
                            <label>From</label>
                            <input type="radio" class="input_button" name="from_score">
                            <label>〜</label>
                            <label>TO</label>
                            <input type="radio" class="input_button" name="to_score">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="search_title">権限:</label>
                        <div class="search_box">
                            <label>test</label>
                            <input type="checkbox" class="input_button" name="role" value="">
                            <label>test</label>
                            <input type="checkbox" class="input_button" name="role" value="">
                            <label>test</label>
                            <input type="checkbox" class="input_button" name="role" value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary search_btn">
                        検索
                    </button>
                </form>
            </div>
            <tbody>
                @foreach ($user_list as $list)
                    <div class="user_content">
                        <div class="row">
                            {{ $list->username }}
                            @if ($list->gender == 0)
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
                            @foreach ($list->japanese_language as $teacher)
                                @if (strpos($teacher->user_id, $list->user_id) !== false)
                                    担当国語教師:{{ $teacher->username }}
                                @endif
                            @endforeach
                            <br>
                            @foreach ($list->math_teacher as $teacher)
                                @if (strpos($teacher->user_id, $list->user_id) !== false)
                                    担当数学教師:{{ $teacher->username }}
                                    <br>
                                @endif
                            @endforeach
                            @foreach ($list->score as $score)
                                点数:{{ $score->score }}点
                            @endforeach
                            <br>
                            @if ($list->role == 0)
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
