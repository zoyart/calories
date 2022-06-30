<header class="header">
    <div class="header__logo_container">
        <img src="{{ asset('\resources\img\logo.png') }}" alt="" class="header__logo">
    </div>
    <nav class="header__nav_container">
        <div class="nav__wrapper">
            <div class="header__text_wrapper">
                <a href="#" class="normal_text header__text">Calories</a>
                <a href="#" class="normal_text header__text">Recipes</a>
                <a href="#" class="normal_text header__text">Progress</a>
            </div> 
        </div>   
        <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>  
        <ul class="menu__box">
            <a href="#" class="big_text header__text menu__item">Calories</a>
            <a href="#" class="big_text header__text menu__item">Recipes</a>
            <a href="#" class="big_text header__text menu__item">Progress</a>
        </ul>
    </div>
    </nav>
    
    <div class="header__login_container">
        <a href="{{ route('login.form') }}" class="login_button_wrapper">
            <p class="bold_text login_button">Sign in</p>
        </a>
    </div>
</header>
