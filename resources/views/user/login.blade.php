<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>
        @yield('head-title')
    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('\resources\css\style.css') }}">
</head>
<body>
<div class="container active">
    <h1 class="very_big_text calories">Calories</h1>
    <div class="form_container">
        <h2 class="big_text form__text">SIGN IN</h2>
        <form method="post" action="{{ route('auth') }}" class="form">
            @csrf
            <div class="log_wrapper center_log">
                <input type="text" class="bold_text login log__input" id="email" aria-describedby="emailHelp"
                       name="name" placeholder="Email">
            </div>
            <div class="log_wrapper center_log">
                <input type="password" class="bold_text log__input" id="password" name="password"
                       placeholder="Password">
            </div>
            <button type="submit" class="log_wrapper submit_wrapper">
                <p class="bold_text submit_text">LOGIN</p>
            </button>
        </form>
        <p class="normal_text forgot_text">Forgot <a href="#" class="link_text">Username / Password?</a></p>
        <p class="normal_text between_text">or</p>
        <p class="normal_text"><a href="{{ route('register.form') }}" class="link_text">Create your Account</a></p>
    </div>
</div>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script src="{{ asset('\resources\js\script.js') }}">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
</script>
</body>


{{-- <div class="container">
        <form method="post" action="{{ route('auth') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-outline-primary">Login</button>
        </form>
    </div>
 --}}








{{-- <div class="container hidden">
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
    </div> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script src="{{ asset('\resources\js\script.js') }}">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
</script>
