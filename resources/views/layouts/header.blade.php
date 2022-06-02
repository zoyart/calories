<!-- Тут header сделаешь -->

<div class="header">
    <div class="logo_container">
        <img src="{{ asset('\resources\img\logo.png') }}" alt="" class="logo">
    </div>
    <div class="part_3_container">
        <div class="header__buttons_container">
            <button href="{{ route('login.form') }}" class="login_button_wrapper">
                <p class="big_text login_button">Sign in</p>
            </button>
            <button href="{{ route('register.form') }}" class="login_button_wrapper">
                <p class="big_text login_button">Sign up</p>
            </button>
        </div>
    </div>
</div>
