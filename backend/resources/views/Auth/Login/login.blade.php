@extends('layouts.common')
@section('title', 'Login')
@include('layouts.header')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h1 class="text-center pt-5 pb-5">Login Form</h1>
       <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group w-50 pt-5 pb-5" style="margin-left: 25%;">
          <label for="email">EmailAddress</label>
          <input class="form-control" type="email" name="email" placeholder="login_email">
        </div>

        <div class="form-group w-50 pt-5 pb-5" style="margin-left: 25%;">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" placeholder="login_password">
        </div>
        <button type="submit" class="btn btn-success" style="margin-left: 68%;">Login</button>

      </form>
      <div class="form_register">
        <p>
          <span style="margin-left:45%;">
            <a class="btn btn-primary" href="{{ route('RegisterForm') }}" method="GET" style="margin-top: 40px;">
              Register New User
            </a>
          </span>
        </p>
      </div>
       <div style="padding-top: 10%"></div>
    </div>
  </div>
</div>
@endsection
@include('layouts.footer')
