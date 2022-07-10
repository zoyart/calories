@extends('layouts.layout')

@section('head-title')
    Recipes
@endsection


@section('content')
    <div class="recipes_page __container">
        <p class="big_text page_title">RECIPES</p>
        <div class="search_panel__container">
            <div class="search_panel__wrapper">
                <input type="text" placeholder="Search" class="search_panel normal_text">
                <button type="button" class="submit_wrapper search_panel__btn">
                    <p class="normal_text submit_text">Search</p>
                </button>
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">НОВЫЕ</p>
                <div class="recipes__text_wrapper">
                    <a href=" {{ route('recipes.more', ['type' => 'new']) }}">
                        <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    </a>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
