<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'www.nsk.kg') }}</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon/favicon.ico">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        @font-face {
            font-family: MuseoSansCyrl-300;
            src: url('fonts/MuseoSansCyrl-300.ttf');
        }

        body {
            font-family: MuseoSansCyrl-300, Helvetica, Arial, sans-serif;
            padding-top:84px;
        }


        .hovereffect {
            width: 90%;
            float: left;
            overflow: hidden;
            position: relative;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.5);
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
        }


        .hovereffect:hover img {
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        .hovereffect:hover .overlay {
            opacity: 0.8;
            filter: alpha(opacity=100);
        }

        .hovereffect:hover h2, .hovereffect:hover a.info {
            opacity: 1;
            filter: alpha(opacity=100);
            -ms-transform: translatey(0);
            -webkit-transform: translatey(0);
            transform: translatey(0);
        }

        .hovereffect:hover a.info {
            -webkit-transition-delay: .1s;
            transition-delay: .1s;
        }
    </style>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="social-contacts" id="social-body">
    <a class="" id="social-hide">
        <img src="/img/socials-widget/down.svg" height="20px" width="20px">
    </a>

    <a class="social-contacts-item" id="cl-phone-0555904888">
        <img src="/img/socials-widget/phone-call.svg" height="30px" width="30px">
    </a>

    <a class="social-contacts-item tooltipimg" href="https://wa.me/+996777904888?text=Здравствуйте."
       target="_blank" id="cl-whatsapp">
        <img src="/img/socials-widget/callback.png" class="" height="45px" width="45px">
        <span class="tooltiptext">Консультация</span>
    </a>

    <a class="social-contacts-item" href="https://wa.me/+996777904888?text=Здравствуйте."
       target="_blank" id="cl-whatsapp">
        <img src="/img/socials-widget/whatsapp-logo.svg" height="50px" width="50px">
    </a>

    <a class="social-contacts-item"
       href="https://t.me/nsk_insurance?text=Здравствуйте." target="_blank"
       id="cl-telegram">
        <img src="/img/socials-widget/telegram-logo.svg" height="45px" width="45px">
    </a>
</div>
<header id="" class="header fixed-top shadow-sm">
    <div class="container container--header">
        <figure class="logo">
            <a href="/">
                <img src="/img/logo.svg" alt="NSK.KG">
            </a>
        </figure>
        <nav class="nav nav--primary" id="header-nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link">О компании</a>
                    <div class="submenu" style="padding-bottom: 60px; width: 100vw; left:0; display: none;">
                        <div class="container submenu-container">
                            <div class="menu-section">
                                <div class="col-row col-row--lg clearfix">
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/company" class="link" style="pointer-events: none">
                                                    О компании
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/company" class="link">О компании</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/topmanagement" class="link">Топ менеджмент</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/companyWork" class="link">Вакансии</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/mission" class="link">Миссия, ценности и принципы</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/requisites" class="link">Реквизиты</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left pull-left-more">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/company" class="link" style="pointer-events: none">
                                                    Дополнительная информация
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/finances" class="link">Финансовые показатели</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/insrules" class="link">Правила страхования</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/reinsurance" class="link">Перестрахование</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/insblog" class="link">Блог о страховании</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                    </div><!-- end .col-lg -->
                                </div><!-- end .col-row -->
                            </div><!-- end .menu-section -->
                        </div><!-- end .container -->
                    </div><!-- end .submenu -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Физическим лицам</a>
                    <div class="submenu" style="padding-bottom: 60px; width: 100vw; left:0; display: none;">
                        <div class="container submenu-container">
                            <div class="menu-section">
                                <div class="col-row col-row--lg clearfix">
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/" class="link" style="pointer-events: none">
                                                    Автомобиль
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/kasko" class="link">Страхование транспорта</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/interest" class="link">Обоюдный интерес</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/kaskosto" class="link">КАСКО за 100</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar"><img src="/img/menu_kasko.png" alt="">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Путешествия
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/savepersontravel" class="link">ВОКРУГ СВЕТА</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/medic" class="link">ДМС КР для въезжающих в КР</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar">
                                            <img src="/img/menu_travel.png" alt="" height="117px" style="margin-top: 28px">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Жизнь и здоровье
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/ns" class="link">Страхование детей от несчастных случаев (Балалык)</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/ns" class="link">Страхование от несчастных случаев (Саламат)</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar">
                                            <img src="/img/menu_health.png" alt="" height="117px" style="margin-top: 28px">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Имущество
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Страхование домов</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Страхование квартир</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Страхование дач и загородных домов</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Ответственность перед соседями</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Уютный дом</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Комфорт</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savehome" class="link">Залоговое имущество</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                    </div><!-- end .col-lg -->
                                </div><!-- end .col-row -->
                            </div><!-- end .menu-section -->
                        </div><!-- end .container -->
                    </div><!-- end .submenu -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Корпоративным клиентам</a>
                    <div class="submenu" style="width: 100vw; left:0; display: none;">
                        <div class="container submenu-container">
                            <div class="menu-section">
                                <div class="col-row col-row--lg clearfix">
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/" class="link" style="pointer-events: none">
                                                    Имущество
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/saveur" class="link">Недвижимое имущество</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/saveur" class="link">Движимое имущество</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/saveur" class="link">Залоговое имущество</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar"><img src="/img/menu_estate.png" alt="">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left pull-left-more">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Автопарк
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/autour" class="link">КАСКО</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/autour" class="link">ДСАГО</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/autour" class="link">Места в авто ТС</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar">
                                            <img src="/img/menu_park.png" alt="" width="241px" style="margin-top: 48px">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left pull-left-more">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Прочее
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/gruz" class="link">Грузы</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/" class="link">Строительно-монтажные работы</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar">
                                            <img src="/img/menu_gruz.png" alt="" height="117px" style="margin-top: 64px">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                    <div class="col--lg col--row-lg pull-left pull-left-more">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/ru/#" class="link" style="pointer-events: none">
                                                    Сотрудники
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/" class="link">ДМС</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/" class="link">НС</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/nsur" class="link">ОСГОР</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                        <figure class="menu-avatar">
                                            <img src="/img/menu_other.png" alt="" height="117px" style="margin-top: 34px">
                                        </figure>
                                    </div><!-- end .col-lg -->
                                </div><!-- end .col-row -->
                            </div><!-- end .menu-section -->
                        </div><!-- end .container -->
                    </div><!-- end .submenu -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Обязательное страхование</a>
                    <div class="submenu" style="padding-bottom: 60px; width: 100vw; left:0; display: none;">
                        <div class="container submenu-container">
                            <div class="menu-section">
                                <div class="col-row col-row--lg clearfix">
                                    <div class="col--lg col--row-lg pull-left">
                                        <div class="menu-block">
                                            <h4 class="menu-block-title">
                                                <a href="/" class="link" style="pointer-events: none">
                                                    Ответственности
                                                </a>
                                            </h4>
                                            <ul class="menu-block-list">
                                                <li class="menu-block-list-item"><a href="/otwork" class="link">Ответственности работодателя</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/obot" class="link">Ответственности организаций предприятий повышенной опасности</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/obsave" class="link">Ответственности перевозчиков опасных грузов</a>
                                                </li>
                                                <li class="menu-block-list-item"><a href="/savepep" class="link">Ответственности перевозчиков пассажиров</a>
                                                </li>
                                            </ul>
                                        </div><!-- end .menu-block -->
                                    </div><!-- end .col-lg -->
                                </div><!-- end .col-row -->
                            </div><!-- end .menu-section -->
                        </div><!-- end .container -->
                    </div><!-- end .submenu -->
                </li>
                <ul class="nav-item-list">
                    <li>
                        <a href="tel:+996 312 644 555">+996 312 644 555</a>
                    </li>
                    <li>
                        <a href="tel:+996 777 904 888">+996 777 904 888</a>
                    </li>
                    <li>
                        <a href="tel:+996 555 904 888">+996 555 904 888</a>
                    </li>
                </ul>
            </ul>
        </nav>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
        <div class="numbers-header">
            <ul style="width: 102px">
                <li>
                    <a href="tel:+996 312 644 555">+996 312 644 555</a>
                </li>
                <li>
                    <a href="tel:+996 777 904 888">+996 777 904 888</a>
                </li>
                <li>
                    <a href="tel:+996 555 904 888">+996 555 904 888</a>
                </li>
            </ul>
        </div>
    </div>
</header>
@yield('content')

<!-- Footer -->
<footer class="page-footer font-small indigo mt-5">
    <hr>
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Меню</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="/#">Главная</a>
                    </li>
                    <li>
                        <a href="/company">О компании</a>
                    </li>
                    <li>
                        <a href="/#">Юридическим лицам</a>
                    </li>
                    <li>
                        <a href="/#">Физическим лицам</a>
                    </li>
                    <li>
                        <a href="/insrules">Правила страхования</a>
                    </li>
                    <li>
                        <a href="/contact">Контакты</a>
                    </li>
                    <li>
                        <a href="/requisites">Реквизиты</a>
                    </li>
                    <li>
                        <a href="/companyWork">Вакансии</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Контакты</h5>

                <ul class="list-unstyled">
                    <li>
                        <strong>Центр Обслуживания клиентов в городе Бишкек</strong>
                        <p>
                            короткий номер 1731
                            <br>
                            г.Бишкек, ул.Ибраимова,108<br>
                            тел.: + 996 312 888 180; <br>+ 996 555 641 888; <br>+996 777 904 888<br>


                        </p>
                        <strong> Южный региональный филиал в городе ОШ</strong>
                        <p>
                            г. Ош, ул. Мухамед Али Джиннах, 15А<br>
                            Тел: +996 (3222) 66842; <br>+996 0556 606014; <br>+996 0773 206705<br>
                        </p>
                    </li>

                    <li>
                        <strong>Email:</strong>
                        <p>
                            <a href="">info@nsk.kg</a>
                        </p>

                    </li>
                    <li>
                        <strong>Головной офис :</strong>
                        <p>
                            г.Бишкек, пер. Клубный,16<br>
                            + 996 312 644 555
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Подпишитесь</h5>

                <ul class="list-unstyled">
                    <li>
                        Следите за нашими новостями через социальные сети!<br>

                        <a href="https://instagram.com/nsk_insurance?igshid=1rcqfex94wc3j"> <img
                                src="img/instagram.png"></a>
                        <a href="https://www.facebook.com/zao.nsk"><img src="img/facebook.png"></a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="https://www.nsk.kg/"> www.nsk.kg</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
@yield('scripts')
</div>
</body>
</html>
