@extends('layouts.layout')

@section('head-title')
    Calories
@endsection


@section('content')

<div class="calories_page __container">
    <div class="calories__date">
        <a href="#" class="calories__menu_btn date_btn">
            <img src="{{ asset('\resources\img\left.svg') }}" class="calories__menu_btn_img">
        </a>
        <p class="normal_text">Today, June 25</p>
        <a href="#" class="calories__menu_btn date_btn">
            <img src="{{ asset('\resources\img\right.svg') }}" class="calories__menu_btn_img">
        </a>
    </div>
    <div class="calories__menu_block">
        <a href="#" class="calories__menu_btn">
            <img src="{{ asset('\resources\img\left.svg') }}" class="calories__menu_btn_img">
        </a>
        <div class="calories__consumption">
            <p class="big_text">674</p>
            <p class="normal_text">CONSUMPTION</p>
        </div>
        <div class="calories__calories_left">
            <div class="calorius_wrapper">
                <p class="big_text">2001</p>
                <p class="normal_text">CALORIES REMAINED</p>
            </div>
        </div>
        <div class="calories__consumption">
            <p class="big_text">674</p>
            <p class="normal_text">CONSUMPTION</p>
        </div>
        <a href="#" class="calories__menu_btn">
            <img src="{{ asset('\resources\img\right.svg') }}" class="calories__menu_btn_img">
        </a>
    </div>
    <div class="calories__protein_block">
        <div id="carbohydrates" class="calories__protein">
            <p class="normal_text">CARBOHYDRATES</p>
            <div class="strip protein__srtip"></div>
            <p class="normal_text">0 / 250</p>
        </div>
        <div id="protein" class="calories__protein">
            <p class="normal_text">PROTEINS</p>
            <div class="strip protein__srtip"></div>
            <p class="normal_text">0 / 250</p>
        </div>
        <div id="fat" class="calories__protein">
            <p class="normal_text">FAT</p>
            <div class="strip protein__srtip"></div>
            <p class="normal_text">0 / 250</p>
        </div>
    </div>
    <div class="calories__eating_time_block">
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="image_wrapper">
                    <img src="" alt="" class="image calories__image">
                </div>
                <div class="text__wrapper">
                    <p class="normal_plus_text">Breakfast</p>
                    <p class="normal_text">500-600 kcal is recommended</p>
                </div>
                <a href="" class="plus_button calories__button">
                    <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
                </a>
            </div>

            <div class="calories__hr_wrapper">
                <hr>
                <p class="normal_text">520 kcal</p>
            </div>
        </div>
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="image_wrapper">
                    <img src="" alt="" class="image calories__image">
                </div>
                <div class="text__wrapper">
                    <p class="normal_plus_text">Brunch</p>
                    <p class="normal_text">500-600 kcal is recommended</p>
                </div>
                <a href="" class="plus_button calories__button">
                    <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
                </a>
            </div>

            <div class="calories__hr_wrapper">
                <hr>
                <p class="normal_text">520 kcal</p>
            </div>
        </div>
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="image_wrapper">
                    <img src="" alt="" class="image calories__image">
                </div>
                <div class="text__wrapper">
                    <p class="normal_plus_text">Dinner</p>
                    <p class="normal_text">500-600 kcal is recommended</p>
                </div>
                <a href="" class="plus_button calories__button">
                    <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
                </a>
            </div>

            <div class="calories__hr_wrapper">
                <hr>
                <p class="normal_text">520 kcal</p>
            </div>
        </div>
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="image_wrapper">
                    <img src="" alt="" class="image calories__image">
                </div>
                <div class="text__wrapper">
                    <p class="normal_plus_text">Lunch</p>
                    <p class="normal_text">500-600 kcal is recommended</p>
                </div>
                <a href="" class="plus_button calories__button">
                    <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
                </a>
            </div>

            <div class="calories__hr_wrapper">
                <hr>
                <p class="normal_text">520 kcal</p>
            </div>
        </div>
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="image_wrapper">
                    <img src="" alt="" class="image calories__image">
                </div>
                <div class="text__wrapper">
                    <p class="normal_plus_text">Training</p>
                    <p class="normal_text">Recommended for 30 minutes</p>
                </div>
                <a href="" class="plus_button calories__button">
                    <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
                </a>
            </div>
        </div>
        <div class="calories__eating_time">
            <div class="eating_time_text__wrapper">
                <div class="text__wrapper bucket_text">
                    <p class="normal_plus_text">Water</p>
                </div>
                <div class="eating_buckets_wrapper">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                    <img src="{{ asset('\resources\img\bucket.svg') }}" alt="" class="bucket_image">
                </div>

            </div>
            <a href="" class="plus_button calories__button">
                <img src="{{ asset('\resources\img\plus_button.svg') }}" alt="" class="plus_image button_image">
            </a>
            <div class="calories__hr_wrapper">
                <hr>
                <p class="normal_text">520 ml</p>
            </div>
        </div>
    </div>
</div>
@endsection
