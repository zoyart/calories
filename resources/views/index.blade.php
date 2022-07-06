@extends('layouts.layout')

@section('head-title')
    Главная
@endsection


@section('content')
    <div>
        Registration: <a href="{{ route('register.form') }}">Link</a>
    </div>
@endsection

