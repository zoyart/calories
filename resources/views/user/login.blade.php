@extends('layouts.layout')

@section('head-title')
    Авторизация
@endsection


@section('content')
    <div class="container active">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">SIGN IN</h2>
            <form method="post" action="{{ route('auth') }}">
                @csrf
                <div class="log_wrapper">
                    <input type="email" class="bold_text login log__input" id="email" aria-describedby="emailHelp" name="email" placeholder="Email">
                </div>
                <div class="log_wrapper">
                    <input type="password" class="bold_text log__input" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="log_wrapper submit_wrapper">
                    <p class="bold_text submit_text">LOGIN</p>
                </button>
            </form>
            <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
            <p class="normal_text between_text">or</p>
            <p class="normal_text"><a href="#" class="link_text">Create your Account</a></p>
        </div>
    </div>
    

@endsection

{{-- <div class="container">
        <form method="post" action="{{ route('auth') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-outline-primary">Login</button>
        </form>
    </div>
 --}}








{{-- <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text"></h2>
            <form action="#">
                <div class="log_wrapper">
                    <input type="email" name="login" class="bold_text login log__input" placeholder="Email">
                </div>
                <div class="log_wrapper">
                    <input type="password" name="pass" class="bold_text log__input" placeholder="Password">
                </div>
                <div class="log_wrapper submit_wrapper">
                    <input class="bold_text submit__text" type="submit" value="LOGIN"></p>
                </div>
            </form>
            <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
            <p class="normal_text between_text">or</p>
            <p class="normal_text"><a href="#" class="link_text">Create your Account</a></p>
        </div>
    </div> --}}
