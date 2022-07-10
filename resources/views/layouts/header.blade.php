<div class="header__container">
    <header class="header">
        <div class="header__logo_container">
            <a href="{{ route('index') }}">
                <img src="{{ asset('\resources\img\logo.png') }}" alt="" class="header__logo">
            </a>
        </div>
        <nav class="header__nav_container">
            <div class="nav__wrapper">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{ route('calories.index') }}" class="normal_text header__text">Calories</a>
                    <a href="{{ route('recipes.index') }}" class="normal_text header__text">Recipes</a>
                    <a href="{{ route('progress.index') }}" class="normal_text header__text">Progress</a>
                @else
                    <a href="{{ route('index') }}" class="normal_text header__text">General</a>
                    <a href="#" class="normal_text header__text">Contact</a>
                @endif

            </div>
        </nav>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox"/>
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a href="{{ route('login.form') }}" class="login_button_wrapper">
                        <p class="bold_text login_button">Sign in</p>
                    </a>
                @endif
                @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{ route('calories.index') }}" class="big_text header__text menu__item">Calories</a>
                        <a href="{{ route('recipes.index') }}" class="big_text header__text menu__item">Recipes</a>
                        <a href="{{ route('progress.index') }}" class="big_text header__text menu__item">Progress</a>
                        <a href="{{ route('profile.show') }}" class="big_text header__text menu__item">Profile</a>
                @endif

            </ul>

        </div>


        <div class="header__login_container">
            @if(!\Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('login.form') }}" class="login_button_wrapper">
                    <p class="bold_text login_button">Sign in</p>
                </a>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('profile.show') }}" class="login_profile_wrapper">
                    <img src="{{ asset('\resources\img\profile.png') }}" alt="" class="header__logo">
                </a>
            @endif
        </div>
    </header>
</div>

