@extends('layouts.layout')

@section('head-title')
    Профиль
@endsection


@section('content')
    <div class="container">
        <div class="user__data">
            <div>
                Name:
                {{ $user->name }}
            </div>
            <div>
                email:
                {{ $user->email }}
            </div>
            <div>
                gender:
                {{ $user->gender }}
            </div>
            <div>
                purpose:
                {{ $user->purpose }}
            </div>
            <div>
                workout:
                {{ $user->workout }}
            </div>
            <div>
                pace:
                {{ $user->pace }}
            </div>
            <div>
                weight:
                {{ $user->weight }}
            </div>
            <div>
                purpose_weight:
                {{ $user->purpose_weight }}
            </div>
            <div>
                growth:
                {{ $user->growth }}
            </div>
            <div>
                age:
                {{ $user->age }}
            </div>
            <div>
                calories_per_day:
                {{ $user->calories_per_day }}
            </div>
            <div>
                created_at:
                {{ $user->created_at }}
            </div>
            <form action="{{ route('profile.edit') }}">
                <button type="submit" class="btn btn-outline-success mt-3">Обновить данные</button>
            </form>
            <form action="{{ route('logout') }}">
                <button type="submit" class="btn btn-outline-danger mt-3">Выйти</button>
            </form>
        </div>
    </div>

@endsection
