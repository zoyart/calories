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
                    <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">ЗАВТРАК</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">ОБЕД</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">ЛАНЧ</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipes__list_container">
            <div class="recipes__list_text">
                <p class="normal_plus_text">УЖИН</p>
                <div class="recipes__text_wrapper">
                    <p class="normal_plus_text">ВСЕ РЕЦЕПТЫ</p>
                    <img src="{{ asset('\resources\img\right_green.svg') }}" alt="">
                </div>
            </div>
            <div class="recipes__list">
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
                <div class="recipes__list_item">
                    <img src="{{ asset('\resources\img\smuzi.jpg') }}" alt="">
                    <div class="list_item_text__wrapper">
                        <p class="normal_text">Бананово-ежевичный смузи</p>
                        <p class="normal_text">250 ККАЛ</p>
                    </div>
                </div>
            </div>
        </div>

    </div>




        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ Str::limit($recipe->name, 20, '...') }}
                </h5>
                <h5 class="card-title">

                </h5>
                <p class="card-text">
                    {{ Str::limit($recipe->description, 60, '...') }}
                </p>
                <a href="#" class="btn btn-primary">More</a>
            </div>
        </div>
@endsection
