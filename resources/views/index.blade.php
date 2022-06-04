@extends('layouts.layout')

@section('head-title')
    Главная
@endsection


@section('content')
    <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
        <h2 class="big_text form__text">SIGN IN</h2>
        <form action="#">
            <div class="log_wrapper">
                <input type="email" name="login" class="bold_text login log__input" placeholder="Email">
            </div>
            <div class="log_wrapper">
                <input type="password" name="pass" class="bold_text log__input" placeholder="Password">
            </div>
                
            <div class="log_wrapper submit_wrapper">
                <input class="bold_text submit__text" type="submit" value="LOGIN"></p>
            </div>
        </form>
        <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
        <p class="normal_text between_text">or</p>
        <p class="normal_text"><a href="#" class="link_text">Create your Account</a></p>
    </div>
    </div>
    <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1> 
        <div class="form_container">
            <h2 class="big_text form__text">SIGN UP</h2>
            <form action="#">
                <div class="log_wrapper">
                    <input type="text" name="name" class="bold_text login log__input" placeholder="Name">
                </div>
                <div class="log_wrapper">
                    <input type="email" name="login" class="bold_text login log__input" placeholder="Email">
                </div>
                <div class="log_wrapper">
                    <input type="password" name="pass" class="bold_text log__input" placeholder="Password">
                </div>
                
                <div class="log_wrapper submit_wrapper">
                    <input class="bold_text submit__text" type="submit" value="REGISTER"></p>
                </div>
            </form>
            <p class="normal_text forgot_text"><a href="#" class="link_text">Or login to your account</a></p>
        </div>
    </div>
    <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text"></h2>
            <form action="#">
                <div class="log_wrapper">
                    <input type="email" name="login" class="bold_text login log__input" placeholder="Email">
                </div>
                <div class="log_wrapper">
                    <input type="password" name="pass" class="bold_text log__input" placeholder="Password">
                </div>
                
                <div class="log_wrapper submit_wrapper">
                    <input class="bold_text submit__text" type="submit" value="LOGIN"></p>
                </div>
            </form>
            <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
            <p class="normal_text between_text">or</p>
            <p class="normal_text"><a href="#" class="link_text">Create your Account</a></p>
        </div>
    </div>
    <div class="container active">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">Choose your gender:</h2>
            <form name="gender">
                <div class="genders">
                    <div class="man gender_wrapper">
                        <button class="gender_button">
                            <img src="{{ asset('\resources\img\bussiness-man.png') }}" class="gender_img" alt="Man">
                        </button>
                    </div>
                    <div class="woman gender_wrapper">
                        <button class="gender_button">
                            <img src="{{ asset('\resources\img\businesswoman.png') }}" class="gender_img" alt="Woman">
                        </button>
                    </div>
                </div>
                <input id="value_input" value="none" type="text" class="hidden">
                <button type="submit" class="log_wrapper submit_wrapper">
                    <p class="bold_text submit_text">CONTINUE</p>
                </button>
            </form>
        </div>
    </div>

@endsection

<script>
    let reqUrl = "http://calories/api/target-date?weight=80&purpose_weight=75&purpose=down";
    
    function sendRequest(method, url) {
        return fetch(url).then(response => {
            return response.text()
        })
    }

    sendRequest('GET', reqUrl)
        .then(data => console.log(data))
        .catch(err => console.log(err))

        
</script>