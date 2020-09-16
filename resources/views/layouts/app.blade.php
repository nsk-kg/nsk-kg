<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'www.nsk.kg') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        @font-face {
            font-family: OptimusPrinceps;
            src: url('font/K_Avante-Regular.ttf');
        }

        body {
            font-family: OptimusPrinceps;
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="mt-2">
                    <a href="/"><img src="/img/logo.svg"> </a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/company">О компании<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Физическим лицам
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="pl-3"><b>АВТОМОБИЛЬ</b></div>
                        <a class="dropdown-item" href="/kasko">Каско</a>
                        <a class="dropdown-item" href="/dsdsago">ДСАГО</a>
                        <a class="dropdown-item" href="/saveperson">Страхование пассажиров</a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-3"><b>ПУТЕШЕСТВИЕ</b></div>
                        <a class="dropdown-item" href="/savepersontravel">Страхование выезжающих за рубеж</a>
                        <a class="dropdown-item" href="/medic">Страхование медецинских расходов</a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-3"><b>ЗДОРОВЬЕ</b></div>
                        <a class="dropdown-item" href="/ns">Страхование от несчастных случаев</a>
                        <div class="pl-3"><b>ИМУЩЕСТВО</b></div>
                        <a class="dropdown-item" href="/savehome">Страхование домов и квартир</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Для Бизнеса
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="pl-3"><b>ОБЯЗАТЕЛЬНОЕ СТРАХОВАНИЕ</b></div>
                        <a class="dropdown-item" href="#"> Гражданской ответственности работодателя</a>
                        <a class="dropdown-item" href="#"> Гражданской ответственности перевозчика <br>опасных
                            грузов</a>
                        <a class="dropdown-item" href="#"> Гражданской ответственности предприятий <br>источников
                            повышенной опасности</a>
                        <a class="dropdown-item" href="#"> Гражданской ответственности перевозчика <br> перед
                            пассажирами</a>
                        <div class="dropdown-divider"></div>
                        <div class="pl-3"><b>ДОБРОВОЛЬНОЕ СТРАХОВАНИЕ</b></div>
                        <a class="dropdown-item" href="#"> Имущества юридических лиц</a>
                        <a class="dropdown-item" href="#"> Автотранспорт</a>
                        <a class="dropdown-item" href="#"> Грузы</a>
                        <a class="dropdown-item" href="#"> Медицинское страхование сотрудников</a>
                        <a class="dropdown-item" href="#"> Строительно монтажные риски</a>
                        <a class="dropdown-item" href="#"> Воздушный транспорт</a>
                        <a class="dropdown-item" href="#"> Профессиональная ответственность</a>
                        <a class="dropdown-item" href="#"> Работников от несчастных случаев</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Калькуляторы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/calculators/osgop">Ответственность работодателя</a>
                        <a class="dropdown-item" href="/calculators/osgopog">Обязательное страхование гражданской <br>ответственности перевозчика опасных грузов</a>
                        <a class="dropdown-item" href="/calculators/osgpopp">Перевозчик перед пассажирами</a>
                        <a class="dropdown-item" href="/calculators/osopo">Страхование гражданской ответственности <br> организаций, эксплуатирующих опасные производственные объекты
                        </a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/ensuranse">Произошел страховой случай<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/contact">Контакты<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                    </li>
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
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
                        <a href="#">Главная</a>
                    </li>
                    <li>
                        <a href="#!">О компании</a>
                    </li>
                    <li>
                        <a href="#!">Юридическим лицам</a>
                    </li>
                    <li>
                        <a href="#!">Физическим лицам</a>
                    </li>
                    <li>
                        <a href="#!">Правила страхования</a>
                    </li>
                    <li>
                        <a href="#!">Лицензии</a>
                    </li>
                    <li>
                        <a href="#!">Финансовые показатели</a>
                    </li>
                    <li>
                        <a href="#!">Контакты</a>
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
                        <strong>Телефон:</strong>
                        <p>
                            +996 312 888 180 +996 312 644-555
                        </p>

                    </li>

                    <li>
                        <strong>Email:</strong>
                        <p>
                            <a href="">info@nsk.kg</a>
                        </p>

                    </li>
                    <li>
                        <strong>Адрес:</strong>
                        <p>
                            Кыргызстан, Бишкек
                            пер. Клубный 16
                            ул. Ибраимова 108
                        </p>

                    </li>
                    <li>
                        <strong>Школа страховых агентов:</strong>
                        <p>
                            +996 555 714195
                            <a href="">elena.b@nsk.kg</a>
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
                        Следите за нашими новостями через социальные сети!
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
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://www.nsk.kg/"> www.nsk.kg</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
@yield('scripts')
</div>
</body>
</html>
