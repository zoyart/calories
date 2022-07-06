@extends('layouts.layout')

@section('head-title')
    Авторизация
@endsection


@section('content')
    <div class="container">
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                <label class="form-check-label" for="remember_me">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-primary">Login</button>
            Check: {{ \Illuminate\Support\Facades\Auth::check() }}
        </form>
    </div>

@endsection
