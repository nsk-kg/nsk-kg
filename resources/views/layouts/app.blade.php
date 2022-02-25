<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'www.nsk.kg') }}</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon/favicon.ico">
    <script src="{{ asset('js/app.js') }}" defer></script>

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

        .header {
            z-index: 3;
            width: 100%;
        }

    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="social-contacts" id="social-body">
    <a class="" id="social-hide">
        <img src="/img/socials-widget/down.svg" height="20px" width="20px">
    </a>

    <a class="social-contacts-item" id="cl-phone-0555904888">
        <img src="/img/socials-widget/phone-call.svg" height="30px" width="30px">
    </a>

    <a class="social-contacts-item tooltipimg" href="https://wa.me/+996558954888?text=Здравствуйте."
       target="_blank" id="cl-whatsapp">
        <img src="/img/socials-widget/callback.png" class="" height="45px" width="45px">
        <span class="tooltiptext">Аварийный комиссар</span>
    </a>

    <a class="social-contacts-item" href="https://wa.me/0555904888?text=Здравствуйте."
       target="_blank" id="cl-whatsapp">
        <img src="/img/socials-widget/whatsapp-logo.svg" height="50px" width="50px">
    </a>

    <a class="social-contacts-item"
       href="tg://resolve?domain=nsk_insurance&text=Здравствуйте." target="_blank"
       id="cl-telegram">
        <img src="/img/socials-widget/telegram-logo.svg" height="45px" width="45px">
    </a>
</div>
<div id="" class="header fixed-top ">
    <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm">
        <div class="container">
                <div class="mt-2"><a href="/"><img src="{{ asset('img/logo.svg')  }}" width="140" height="60"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О компании
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/company">О компании</a>
                            <a class="dropdown-item" href="/topmanagement">Топ менеджмент</a>
                            <a class="dropdown-item" href="/finances">Финансовые показатели</a>
                            <a class="dropdown-item" href="/reinsurance">Перестрахование</a>
                            <a class="dropdown-item" href="/insrules">Правила страхования</a>
                            <a class="dropdown-item" href="/insblog">Блог о страховании</a>
                            <a class="dropdown-item" href="/companyWork">Вакансии</a>
                            <a class="dropdown-item" href="/mission">Миссия, ценности и принципы</a>
                            <a class="dropdown-item" href="/requisites">Реквизиты</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Физическим лицам
                        </a>
                        <div class="dropdown-menu big" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item-block">
                                <div class="pl-3"><b>АВТОМОБИЛЬ</b></div>
                                <a class="dropdown-item" href="/kasko">Страхование транспорта</a>
                                <a class="dropdown-item" href="/interest">Обоюдный интерес</a>
                                <a class="dropdown-item" href="/kaskosto">КАСКО за 100</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-3"><b>ПУТЕШЕСТВИЯ</b></div>
                                <a class="dropdown-item" href="/savepersontravel">ВОКРУГ СВЕТА</a>
                                <a class="dropdown-item" href="/medic">ДМС КР для въезжающих в КР</a>
                            </div>
                            <div class="dropdown-item-block">
                                <div class="dropdown-divider"></div>
                                <div class="pl-3"><b>ЖИЗНЬ И ЗДОРОВЬЕ</b></div>
                                <a class="dropdown-item" href="/ns">Страхование детей от несчастных случаев (Балалык)</a>
                                <a class="dropdown-item" href="/ns">Страхование от несчастных случаев (Саламат)</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-3"><b>ИМУЩЕСТВО</b></div>
                                <a class="dropdown-item" href="/savehome">Страхование домов</a>
                                <a class="dropdown-item" href="/savehome">Страхование квартир</a>
                                <a class="dropdown-item" href="/savehome">Страхование дач и загородных домов</a>
                                <a class="dropdown-item" href="/savehome">Ответственность перед соседями</a>
                                <a class="dropdown-item" href="/savehome">Уютный дом</a>
                                <a class="dropdown-item" href="/savehome">Комфорт</a>
                                <a class="dropdown-item" href="/savehome">Залоговое имущество</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Корпоративным клиентам
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="pl-3"><b>ИМУЩЕСТВО</b></div>
                            <a class="dropdown-item" href="/saveur">Недвижимое имущество</a>
                            <a class="dropdown-item" href="/saveur">Движимое  имущество</a>
                            <a class="dropdown-item" href="/saveur">Залоговое  имущество</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-3"><b>АВТОПАРК</b></div>
                            <a class="dropdown-item" href="/autour">КАСКО</a>
                            <a class="dropdown-item" href="/autour">ДСАГО</a>
                            <a class="dropdown-item" href="/autour">Места в авто ТС</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-3"><b>ПРОЧЕЕ</b></div>
                            <a class="dropdown-item" href="/gruz">Грузы</a>
                            <a class="dropdown-item" href="#">Строительно-монтажные работы</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-3"><b>СОТРУДНИКИ</b></div>
                            <a class="dropdown-item" href="#">ДМС</a>
                            <a class="dropdown-item" href="#">НС</a>
                            <a class="dropdown-item" href="/nsur">ОСГОР</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Обязательное страхование
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/otwork">Ответственности работодателя</a>
                            <a class="dropdown-item" href="/obot">Ответственности организаций предприятий повышенной опасности </a>
                            <a class="dropdown-item" href="/obsave">Ответственности перевозчиков опасных грузов</a>
                            <a class="dropdown-item" href="/savepep">Ответственности перевозчиков пассажиров</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="numbers-header">
                <ul>
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
    </nav>
</div>

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
