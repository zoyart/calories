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
                <p class="normal_plus_text">New</p>
                <div class="recipes__text_wrapper">
                    <a href=" {{ route('recipes.more', ['type' => 'new']) }}">
                        <p class="normal_plus_text">All recipes</p>
                    </a>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                @foreach($newRecipes as $newRecipe)
                    <div class="recipes__list_item">
                        <img src="{{ asset('public/storage/' . $newRecipe->preview) }}" alt="">
                        <div class="list_item_text__wrapper">
                            <p class="normal_text">{{ $newRecipe->name }}</p>
                            <p class="normal_text">{{ $newRecipe->calories}} kcal</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">BREAKFAST</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">All recipes</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                @foreach($breakfastRecipes as $breakfastRecipe)
                    <div class="recipes__list_item">
                        <img src="{{ asset('public/storage/' . $breakfastRecipe->preview) }}" alt="">
                        <div class="list_item_text__wrapper">
                            <p class="normal_text">{{ $breakfastRecipe->name }}</p>
                            <p class="normal_text">{{ $breakfastRecipe->calories }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">DINNER</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">All recipes</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                @foreach($brunchRecipes as $brunchRecipe)
                    <div class="recipes__list_item">
                        <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                        <div class="list_item_text__wrapper">
                            <p class="normal_text">{{ $brunchRecipe->name }}</p>
                            <p class="normal_text">{{ $brunchRecipe->calories }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">LUNCH</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">All recipes</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                @foreach($lunchRecipes as $lunchRecipe)
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">{{ $lunchRecipe->name }}</p>
                        <p class="normal_text">{{ $lunchRecipe->calories }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">DINNER</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">All recipes</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                @foreach($dinnerRecipes as $dinnerRecipe)
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">{{ $dinnerRecipe->name }}</p>
                        <p class="normal_text">{{ $dinnerRecipe->calories }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
