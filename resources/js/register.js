
// Запрос на сервер, после получения целевого и текущего веса
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

