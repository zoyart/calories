<!-- Тут footer сделаешь -->
<footer>
    <div class="footer__container __container">
        <div class="footer__social_container">
            <p class="normal_text">Social networks</p>
            <div class="social_container">
                <!-- Добавить логотипы соц сетей -->
                <img src="{{ asset('\resources\img\sleep.png') }}" class="footer__social_wrapper"><a href="#" class="footer__social"></a></img>
                <img src="{{ asset('\resources\img\sleep.png') }}" class="footer__social_wrapper"><a href="#" class="footer__social"></a></img>
                <img src="{{ asset('\resources\img\sleep.png') }}" class="footer__social_wrapper"><a href="#" class="footer__social"></a></img>
                <img src="{{ asset('\resources\img\sleep.png') }}" class="footer__social_wrapper"><a href="#" class="footer__social"></a></img>
            </div>
            <p class="normal_text rights_text">© 2022 All rights reserved. Calories</p>

        </div>
        <div class="footer__links_container">
            <div class="footer__text_wrapper">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <p class="normal_text">Links</p>
                    <a href="#" class="normal_text footer__text">Calories</a>
                    <a href="#" class="normal_text footer__text">Recipes</a>
                    <a href="#" class="normal_text footer__text">Progress</a>
                    <a href="#" class="normal_text footer__text">Profile</a>
                @endif
            </div>
        </div>
        <div class="footer__image_container">
            <img src="{{ asset('\resources\img\logo.png') }}" class="footer__image">
        </div>
    </div>
</footer>
