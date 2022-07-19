@extends('layouts.layout')

@section('head-title')
    Профиль
@endsection


@section('content')
    <div class="profile_page __container">
        <div class="profile__basic_information">
            <a href="{{ route('profile.show') }}">
                <img src="{{ asset('\resources\img\profile.png') }}" alt="" class="header__logo">
            </a>
            <p class="big_text">{{ $user->name }}</p>
        </div>
        <div class="profile__data_container">
            <div class="profile__personal_data">
                <div class="profile__personal_data_block block cont">
                    <p class="normal_text fisrt_child">Личные данные</p>
                    <p class="normal_text">
                        Name:
                        {{ $user->name }}
                    </p>
                    <p class="normal_text">
                        Email:
                        {{ $user->email }}
                    </p>
                    <p class="normal_text">
                        Gender:
                        {{ $user->gender }}
                    </p>
                    <p class="normal_text">
                        Purpose:
                        {{ $user->purpose }}
                    </p>
                    <p class="normal_text">
                        Workout:
                        {{ $user->workout }}
                    </p>
                    <p class="normal_text">
                        Pace:
                        {{ $user->pace }}
                    </p>
                    <p class="normal_text">
                        Weight:
                        {{ $user->weight }}
                    </p>
                    <p class="normal_text">
                        Purpose weight:
                        {{ $user->purpose_weight }}
                    </p>
                    <p class="normal_text">
                        Growth:
                        {{ $user->growth }}
                    </p>
                    <p class="normal_text">
                        Age:
                        {{ $user->age }}
                    </p>
                    <p class="normal_text">
                        Account created:
                        {{ $user->created_at }}
                    </p>
                </div>
                <div class="profile__personal_data_btns">
                    <form action="{{ route('profile.edit') }}">
                        <button type="submit" class="profile__update_btn profile__btn cont">
                            <p class="normal_plus_text">ОБНОВИТЬ ДАННЫЕ</p>
                        </button>
                    </form>
                    <form action="{{ route('logout') }}">
                        <button type="submit" class="profile__exit_btn profile__btn cont">
                            <p class="normal_plus_text">ВЫЙТИ ИЗ АККАУНТА</p>
                        </button>
                    </form>
                </div>
            </div>
            <div class="profile__statistic_data">
                <div class="profile__body_block block cont">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="block_image">
                    <p class="normal_text">Параметры тела</p>
                    <img src="{{ asset('\resources\img\right.svg') }}" alt="" class="block_image">
                </div>
                <div class="profile__body_block block cont">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="block_image">
                    <p class="normal_text">Статистика</p>
                    <img src="{{ asset('\resources\img\right.svg') }}" alt="" class="block_image">
                </div>
                <div class="profile__body_block block cont">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="block_image">
                    <p class="normal_text">Избранное</p>
                    <img src="{{ asset('\resources\img\right.svg') }}" alt="" class="block_image">
                </div>
                <div class="profile__succes_block block cont">
                    <p class="normal_text fisrt_child">Ваши успехи</p>
                    <div class="calories__success_wall"></div>
                </div>
            </div>
        </div>
    </div>
<!-- <div class="user__data">
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
        </div> -->
@endsection
