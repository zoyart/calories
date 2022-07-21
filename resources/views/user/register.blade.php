<link rel="stylesheet" type="text/css" href="{{ asset('\resources\css\style.css') }}">

<form id="main-form" action="{{ route('register.store') }}" method="POST" class="container_form">
    @csrf
    <div class="container active">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">Choose your gender:</h2>
            <div class="form">
                <div class="genders">
                    <div class="man gender_wrapper">
                        <button id="male" type="button" class="gender_button">
                            <img src="{{ asset('\resources\img\bussiness-man.png') }}" class="gender_img" alt="Man">
                        </button>
                    </div>
                    <div class="woman gender_wrapper">
                        <button id="female" type="button" class="gender_button">
                            <img src="{{ asset('\resources\img\businesswoman.png') }}" class="gender_img" alt="Woman">
                        </button>
                    </div>

                    <input style="display: none" type="text" value="" name="gender" id="gender" required>
                </div>
                <button type="button" class="log_wrapper submit_wrapper">
                    <p class="bold_text submit_text">CONTINUE</p>
                </button>
            </div>
        </div>
    </div>
    <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">Enter your data</h2>
            <div class="form">
                <div class="log_wrapper">
                    <input type="number" name="age" class="bold_text login log__input" placeholder="Age" required>
                </div>
                <div class="log_wrapper">
                    <input type="number" name="growth" class="bold_text login log__input" placeholder="Growth" required>
                </div>
                <div div class="log_wrapper">
                    <input type="number" name="weight" id="weight" class="bold_text log__input" placeholder="Weight"
                           required>
                </div>
                <div div class="log_wrapper">
                    <input type="number" name="purpose_weight" id="purpose_weight" class="bold_text log__input"
                           placeholder="Purpose weight" required>
                </div>
                <button type="button" class="log_wrapper submit_wrapper" id="btn_section_two">
                    <p class="bold_text submit_text">CONTINUE</p>
                </button>
            </div>
            <!-- <p class="normal_text forgot_text"><a href="#" class="link_text">Or login to your account</a></p> -->
        </div>
    </div>
    <div id="activities" class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">Select the level of daily activity</h2>
            <div class="form" name="activity">
                <div class="activities">
                    <div id="first_active-level" class="activities__div">
                        <button type="button" class="activities__btn">
                            <img src="{{ asset('\resources\img\sleep.png') }}" class="activities__img" alt="sleep">
                            <p class="normal_text activities__text">For sedentary people, there are few training or they are absent</p>
                        </button>
                    </div>
                    <div id="second_active-level" class="activities__div">
                        <button type="button" class="activities__btn">
                            <img src="{{ asset('\resources\img\sports.png') }}" class="activities__img" alt="sleep">
                            <p class="normal_text activities__text">For people with low activity, easy training 1-3 times a week or in the form of a different activity equivalent</p>
                        </button>
                    </div>
                    <div id="three_active-level" class="activities__div">
                        <button type="button" class="activities__btn">
                            <img src="{{ asset('\resources\img\exercise.png') }}" class="activities__img" alt="sleep">
                            <p class="normal_text activities__text">For moderately active people: physical work of moderate gravity or regular training 3-5 days a week</p>
                        </button>
                    </div>
                    <div id="fourth_active-level" class="activities__div">
                        <button type="button" class="activities__btn">
                            <img src="{{ asset('\resources\img\girya.png') }}" class="activities__img" alt="sleep">
                            <p class="normal_text activities__text">For very active people: physical work is full day or intensive training 6-7 times a week</p>
                        </button>
                    </div>
                    <div id="fifth_active-level" class="activities__div">
                        <button type="button" class="activities__btn">
                            <img src="{{ asset('\resources\img\fire.png') }}" class="activities__img" alt="sleep">
                            <p class="normal_text activities__text">For extremely active people: hard physical work and intensive training/playing sports</p>
                        </button>
                    </div>
                </div>
                <input style="display: none" type="text" value="" name="workout" id="workout" required>
                {{-- <input id="activities-value_input" value="none" type="text" class="hidden" id="activities"> --}}
                <button type="button" class="log_wrapper submit_wrapper">
                    <p class="bold_text submit_text">CONTINUE</p>
                </button>
            </div>
        </div>
    </div>
    <div class="container hidden">
        <h1 class="very_big_text calories">Calories</h1>
        <div class="form_container">
            <h2 class="big_text form__text">SIGN UP</h2>
            <div class="form" action="#">
                <div>
                    <label for="pace" class="form-label">Pace</label>
                    <input type="range" class="form-range" min="0.1" max="0.7" step="0.1" id="pace" name="pace"
                    oninput="fun1">
                    <input type="text" id="pace_range" value="0.4">
                    <label for="pace" class="form-label">kg/week</label>

                </div>
                <div>
                    <canvas id="target_date" height="300px" width="300px"></canvas>
                </div>
                <div class="log_wrapper">
                    <input type="text" name="name" class="bold_text login log__input" placeholder="Name">
                </div>
                <div class="log_wrapper">
                    <input type="email" name="email" class="bold_text login log__input" placeholder="Email">
                </div>
                <div div class="log_wrapper">
                    <input type="password" name="password" class="bold_text log__input" placeholder="Password">
                </div>
                <div class="log_wrapper submit_wrapper">
                    <input class="bold_text submit_text" type="submit" value="REGISTER"></p>
                </div>
            </div>
            <p class="normal_text forgot_text">Or <a style="color:#62E48B;" href="#" class="link_text">login</a> to your
                account</p>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script>
        var button = document.querySelector('#btn_section_two');
    button.addEventListener('click', function () {
        let weight = document.querySelector('#weight').value;
        let purpose_weight = document.querySelector('#purpose_weight').value;
        const sendData = async (url) => {
            // Обязательный токен для запроса
            const token = $('meta[name=_token]').attr('content');
            // Запрос
            const response = await fetch(url, {
                method: 'GET',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": token,
                },
            });
            if (!response.ok) {
                throw new Error('Ошибка запроса или сервера');
            }
            return await response.json();
        }
        sendData(`http://calories/api/target-date?weight=${weight}&purpose_weight=${purpose_weight}`).then((data) => {
            window.targetDates = { dates: data };
            // Переменные для графика
            let weight = document.querySelector('#weight').value;
            let purpose_weight = document.querySelector('#purpose_weight').value;
            // Отображение графика при переходе
            let canvas = document.querySelector('#target_date').getContext('2d');
            let pace_value = pace.value;
            let date = window.targetDates.dates;
            window.canvasObj = new Chart(canvas, {
                type: 'line',
                data: {
                    labels: ['Today', date[`${pace_value}`]],
                    datasets: [{
                        label: 'Tempo',
                        data: [weight, purpose_weight],
                        backgroundColor: [
                            'white'
                        ],
                        borderColor: [
                            '#41CD8C'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {},
            })
            console.log(window.canvasObj);
        });
    });

    // Работает при изменении range
    function fun1() {
        // Отображение текущего числа в range
        var pace = document.getElementById('pace');
        var pace_range = document.getElementById('pace_range');
        pace_range.value = pace.value;
        // Обновление графика
        let weight = document.querySelector('#weight').value;
        let purpose_weight = document.querySelector('#purpose_weight').value;
        let pace_value = pace.value;
        let date = window.targetDates.dates;
        window.canvasObj.data = {
            labels: ['Today', date[`${pace_value}`]],
            datasets: [{
                label: 'Tempo',
                data: [weight, purpose_weight],
                backgroundColor: [
                    'white'
                ],
                borderColor: [
                    '#41CD8C'
                ],
                borderWidth: 2
            }]
        }
        canvasObj.update();
    }
</script>
{{-- <script src="{{ asset('\resources\js\register.js') }}"></script> --}}
<script src="{{ asset('\resources\js\script.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
</script>


{{-- Подключение библиотеки для отображения графиков (Подключать перед использованием!) --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js">
</script>
