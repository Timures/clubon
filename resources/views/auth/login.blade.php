<!-- resources/views/auth/login.blade.php -->
@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Войти в свой профиль ClubOn.kz</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{ asset('img/face_controll.jpg') }}"
                    alt="Фейс Контроль">

                    @if (count($errors) > 0)
     <div class="alert alert-danger">
     <strong>Whoops! </strong> There were some problems with your input. <br> <br>
     <ul>
    
            @foreach ($errors->all() as $error)
         <li>{{ $error }} </li>
        @endforeach
     </ul>
     </div>
     @endif
     
                <form class="form-horizontal" role="form" method="POST" action="/auth/login">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <div class="form-group">
 <label class="col-md-4 control-label">E-Mail Address </label>
 <div class="col-md-6">
 <input type="email" class="form-control" name="email" value="{{ old('email') }}">
 </div>
 </div>

 <div class="form-group">
 <label class="col-md-4 control-label">Password </label>
 <div class="col-md-6">
 <input type="password" class="form-control" name="password">
 </div>
 </div>

 <div class="form-group">
 <div class="col-md-6 col-md-offset-4">
 <div class="checkbox">
 <label>
 <input type="checkbox" name="remember"> Remember Me
 </label>
 </div>
 </div>
 </div>

 <div class="form-group">
 <div class="col-md-6 col-md-offset-4">
 <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
    Login
 </button>

 <a href="/password/email">Forgot Your Password? </a>

 </div>
 </div>
 </form>
            </div>
            <a href="/auth/register" class="text-center new-account">Зарегистрироваться в ClubOn.kz </a>
        </div>
    </div>
</div>
@endsection