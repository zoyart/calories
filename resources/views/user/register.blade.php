@extends('layouts.layout')

@section('head-title')
    Регистрация
@endsection


@section('content')
    <!-- <div class="container active">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">SIGN IN</h2>
            <form action="#">
                <div class="log_wrapper">
                    <input value="" type="email" name="login" class="bold_text login log__input" placeholder="Email">
                </div>
                <div class="log_wrapper">
                    <input value="" type="password" name="pass" class="bold_text log__input" placeholder="Password">
                </div>
                <button type="submit" class="log_wrapper submit_wrapper">
                    <p class="bold_text submit_text">LOGIN</p>
                </button>
            </form>
            <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
            <p class="normal_text between_text">or</p>
            <p class="normal_text"><a href="#" class="link_text">Create your Account</a></p>
        </div>
    </div> -->
    <!-- <div class="container hidden">
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
    </div> -->
    {{--    <form id="main-form" action="">--}}
    {{--        <div class="container active">--}}
    {{--            <h1 class="very_big_text calories">Calories</h1>--}}
    {{--            <div class="form_container">--}}
    {{--                <h2 class="big_text form__text">Choose your gender:</h2>--}}
    {{--                <div class="form">--}}
    {{--                    <div class="genders">--}}
    {{--                        <div class="man gender_wrapper">--}}
    {{--                            <button type="button" class="gender_button">--}}
    {{--                                <img src="{{ asset('\resources\img\bussiness-man.png') }}" class="gender_img" alt="Man">--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        <div class="woman gender_wrapper">--}}
    {{--                            <button type="button" class="gender_button">--}}
    {{--                                <img src="{{ asset('\resources\img\businesswoman.png') }}" class="gender_img" alt="Woman">--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <button class="log_wrapper submit_wrapper">--}}
    {{--                        <p class="bold_text submit_text">CONTINUE</p>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="container hidden">--}}
    {{--            <h1 class="very_big_text calories">Calories</h1>--}}
    {{--            <div class="form_container">--}}
    {{--                <h2 class="big_text form__text">Enter your data</h2>--}}
    {{--                <div class="form">--}}
    {{--                    <div class="log_wrapper">--}}
    {{--                        <input type="number" name="number" class="bold_text login log__input" placeholder="Your age">--}}
    {{--                    </div>--}}
    {{--                    <div class="log_wrapper">--}}
    {{--                        <input type="number" name="number" class="bold_text login log__input" placeholder="Your height">--}}
    {{--                    </div>--}}
    {{--                    <div div class="log_wrapper">--}}
    {{--                        <input type="number" name="number" class="bold_text log__input" placeholder="Your weight">--}}
    {{--                    </div>--}}
    {{--                    <button type="submit" class="log_wrapper submit_wrapper">--}}
    {{--                        <p class="bold_text submit_text">CONTINUE</p>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <!-- <p class="normal_text forgot_text"><a href="#" class="link_text">Or login to your account</a></p> -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div id="activities" class="container hidden">--}}
    {{--            <h1 class="very_big_text calories">Calories</h1>--}}
    {{--            <div class="form_container">--}}
    {{--                <h2 class="big_text form__text">Select the level of daily activity</h2>--}}
    {{--                <div class="form" name="activity">--}}
    {{--                    <div class="activities">--}}
    {{--                        <div id="first_active-level" class="activities__div">--}}
    {{--                            <button type="button" class="activities__btn">--}}
    {{--                                <img src="{{ asset('\resources\img\sleep.png') }}" class="activities__img" alt="sleep">--}}
    {{--                                <p class="normal_text activities__text">For sedentary people, there are few training or they are absent</p>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        <div id="second_active-level" class="activities__div">--}}
    {{--                            <button type="button" class="activities__btn">--}}
    {{--                                <img src="{{ asset('\resources\img\sports.png') }}" class="activities__img" alt="sleep">--}}
    {{--                                <p class="normal_text activities__text">For people with low activity, easy training 1-3 times a week or in the form of a different activity equivalent</p>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        <div id="three_active-level" class="activities__div">--}}
    {{--                            <button type="button" class="activities__btn">--}}
    {{--                                <img src="{{ asset('\resources\img\exercise.png') }}" class="activities__img" alt="sleep">--}}
    {{--                                <p class="normal_text activities__text">For moderately active people: physical work of moderate gravity or regular training 3-5 days a week</p>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        <div id="fourth_active-level" class="activities__div">--}}
    {{--                            <button type="button" class="activities__btn">--}}
    {{--                                <img src="{{ asset('\resources\img\girya.png') }}" class="activities__img" alt="sleep">--}}
    {{--                                <p class="normal_text activities__text">For very active people: physical work is full day or intensive training 6-7 times a week</p>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        <div id="fifth_active-level" class="activities__div">--}}
    {{--                            <button type="button" class="activities__btn">--}}
    {{--                                <img src="{{ asset('\resources\img\fire.png') }}" class="activities__img" alt="sleep">--}}
    {{--                                <p class="normal_text activities__text">For extremely active people: hard physical work and intensive training/playing sports</p>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <input id="activities-value_input" value="none" type="text" class="hidden">--}}
    {{--                    <button type="submit" class="log_wrapper submit_wrapper">--}}
    {{--                        <p class="bold_text submit_text">CONTINUE</p>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="container hidden">--}}
    {{--            <h1 class="very_big_text calories">Calories</h1>--}}
    {{--            <div class="form_container">--}}
    {{--                <h2 class="big_text form__text">SIGN UP</h2>--}}
    {{--                <div class="form" action="#">--}}
    {{--                    <div class="log_wrapper">--}}
    {{--                        <input type="text" name="name" class="bold_text login log__input" placeholder="Name">--}}
    {{--                    </div>--}}
    {{--                    <div class="log_wrapper">--}}
    {{--                        <input type="email" name="login" class="bold_text login log__input" placeholder="Email">--}}
    {{--                    </div>--}}
    {{--                    <div div class="log_wrapper">--}}
    {{--                        <input type="password" name="pass" class="bold_text log__input" placeholder="Password">--}}
    {{--                    </div>--}}
    {{--                    <div class="log_wrapper submit_wrapper">--}}
    {{--                        <input class="bold_text submit_text" type="submit" value="REGISTER"></p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <p class="normal_text forgot_text"><a href="#" class="link_text">Or login to your account</a></p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    <div class="register_form">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <form action="">
                        <div class="stage-1">
                            <label for="name">Gender</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <button type="button" class="btn btn-outline-primary" id="bs-1">Continue</button>
                        </div>
                        <div class="stage-2" style="display: none">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                       required>
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="age" name="age"
                                       required>
                                <label for="age">Age</label>
                            </div>
                            <button type="button" class="btn btn-outline-primary" id="back-2">Back</button>
                            <button type="button" class="btn btn-outline-primary" id="bs-2">Continue</button>
                        </div>
                        <div class="stage-3" style="display: none">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                       required>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                       required>
                                <label for="password">Password</label>
                            </div>
                            <button type="button" class="btn btn-outline-primary" id="back-3">Back</button>
                            <button type="submit" class="btn btn-outline-primary" id="bs-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

