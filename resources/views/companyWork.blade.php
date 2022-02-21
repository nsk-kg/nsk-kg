@extends('layouts.app')

@section('content')
    <style>

        .vacancy-page {
            font-family: MuseoSansCyrl-300, Helvetica, Arial, sans-serif;
            padding-left: 15px;
            padding-right: 15px;
        }

        .vacancy-page .text-muted {
            color: #858585;
            font-size: 16px;
        }


        .text-white {
            color: white;
        }

        .m-top-20 {
            margin-top: 20px;
        }

        .m-top-40 {
            margin-top: 40px;
        }

        .gray-square {
            display: flex;
            align-items: center;
            background-color: #f4f4f4;
            padding-left: 10px;
            max-width: 130px;
            height: 130px;
            margin-left: 15px;
        }

        .gray-square ~ *{
            margin-right: -15px;
        }

        .red-price {
            color: #d60000
        }

        .percent-big {
            font-size: 30px;
        }

        .col-center-60 {
            width: 60%;
            margin-left: 20%;
        }

        .two-col-ul {
            display: flex;
            flex-direction: row;
        }

        .two-col-ul :first-child {
            padding-right: 40px;
        }

        .quoted-text {
            display: flex;
            flex-direction: row;
        }

        .quoted-text::before {
            content: url("/img/vacancy-icon-caw.png");
            margin-right: 20px;
        }

        .mail-text {
            display: flex;
            flex-direction: row;
        }

        .mail-text::before {
            content: "";
            height: 35px;
            width: 35px;
            background-size: 35px 35px;
            background-image: url("/img/icon-email.svg");
            background-repeat: no-repeat;
            margin-top: 5px;
            margin-right: 10px;
        }

        .phone-text {
            display: flex;
            flex-direction: row;
        }

        .phone-text::before {
            content: "";
            height: 35px;
            width: 35px;
            background-size: 35px 35px;
            background-image: url("/img/icon-phone.svg");
            background-repeat: no-repeat;
            margin-top: 5px;
            margin-right: 10px;
        }

        .vacancy_text, .vacancy_list {
            text-align: left;
            font-size: 15px;

        }

        .vacancy_list li::before {
            content: "-";
            font-size: 22px;
            margin-right: 5px;
        }

        .vacancy_list li {
            font-size: 18px;
        }


        #advantages {
            margin-bottom: 20px;
        }


        .vacancy-page h4 {
            margin-bottom: 10px;
        }

        .icon_vacancy {
            text-align: left;
            max-height: 50px;
            max-width: 50px;
            margin-bottom: 10px;
        }

        .top-img-container {
            background-image: url("/img/vacancy-women.png");
            height: 484px;
            background-position: center;
            background-size: auto 100%;
        }

        .bottom-image-container {
            background-image: url("/img/vacancy-mountain.png");
            height: 480px;
            background-position: center;
            background-size: auto 100%;
        }

        .img_text {
            position: absolute;
            left: 20%; /* horizontal alignment */
            top: 50%; /* vertical alignment */
            transform: translate(0, -50%);
        }


        .btn_vacancy {
            font-size: 16px;
            background-color: #0098df;
            width: 200px;
            height: 40px;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;
        }

        .btn_vacancy:hover {
            color: #fff;
            background-color: #1383b8;
        }

        .btn_vacancy:focus {
            color: #fff;
            background-color: #1383b8;
        }

        @media (max-width: 680px) {

            .gray-square ~ *{
                margin-right: 0;
            }

            .icon_vacancy {
                margin-top: 30px;
            }

            .col-center-60 {
                width: 100%;
                margin-left: 0;
                padding-left: 15px;
                padding-right: 15px;
            }

            .two-col-ul {
                flex-direction: column;
            }

            .top-img-container {
                background-position: 20% 0%;
            }

            .img_text {
                position: absolute;
                left: 50%; /* horizontal alignment */
                top: 50%; /* vertical alignment */
                transform: translate(-50%, -50%);
            }

            .vacancy_text, .vacancy_list {
                font-size: 14px;
            }

            .btn_vacancy {
                width: 150px;
                height: 30px;
                font-size: 14px;

            }

        }
    </style>
    <style>
        /* Базовый контейнер табов */
        .tabs {
            min-width: 320px;
            /*max-width: 800px;*/
            padding: 0px;
            margin: 0 auto;
        }

        /* Стили секций с содержанием */
        .tabs > section {
            display: none;
            padding: 30px 15px 15px 0;
            border: none;

        }

        .tabs > section > p {
            margin: 0 0 5px;
            line-height: 1.5;
            color: #383838;
            /* прикрутим анимацию */
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        /* Описываем анимацию свойства opacity */

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Прячем чекбоксы */
        .tabs > input {
            display: none;
            position: absolute;
        }

        /* Стили переключателей вкладок (табов) */
        .tabs > label {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 15px 25px;
            font-weight: 600;
            text-align: center;
            color: #aaa;
            /*border: 0px solid #ddd;*/
            border: none;
            border-width: 1px 1px 1px 1px;
            /*background: #f1f1f1;*/
            border-radius: 3px 3px 0 0;
            width: 49%;
        }


        .tabs > label:hover {
            color: #888;
            cursor: pointer;
        }

        /* Стили для активной вкладки */
        .tabs > input:checked + label {
            color: #0098df;
            /*border-top: 1px solid red;*/
            border-bottom: 3px solid #0098df;
            /*background: #fff;*/
        }

        /* Активация секций с помощью псевдокласса :checked */
        #become-agent:checked ~ #content-become-agent, #become-manager:checked ~ #content-become-manager {
            display: block;
        }

        .vacancy-h4 {
            font-size: 18px;
        }

    </style>

    <main class="vacancy-page">
        <div class="row">
            <div class="col-md-12 top-img-container">
                <div class="img_text">
                    <h3>Вакансии</h3>
                    <br>
                    <ul class="vacancy_list" style="width:350px">
                        <li><a class="scrollto" href="#advantages">Преимущества работы в НСК</a></li>
                        <li><a class="scrollto" href="#grow">Карьерный рост</a></li>
                        <li><a class="scrollto" href="#profit">Почему у нас выгодно работать?</a></li>
                        <li><a class="scrollto" href="#vacancy-tabs">Стать Страховым агентом</a></li>
                        <li><a class="scrollto" href="#vacancy-tabs">Стать Менеджером по страхованию</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="row  m-top-40">
            <div class="col-center-60" id="advantages">
                <h3>Преимущества работы в НСК</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-center-60 advantages-list">
                <div class="row">
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-crown.png"></p>
                        <h4>Репутация</h4>
                        <p class="vacancy_text text-muted">
                            На рынке НСК имеет репутацию надежной и сильной компании, занимающей лидирующие позиции по
                            ключевым направлениям страхования. Это позволит Вам быстрее и легче заключать сделки.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-security.png"></p>
                        <h4>Надежность</h4>
                        <p class="vacancy_text text-muted">
                            Финансовая устойчивость и надежность деятельности НСК ежегодно подтверждается выплатами
                            страховых возмещений, согласно данным которых компания на 1 месте на страховом рынке Кыргызской Республики.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-list.png"></p>
                        <h4>Ассортимент</h4>
                        <p class="vacancy_text text-muted">
                            Разнообразие страховых продуктов позволит Вам работать с различными запросами клиентов.
                        </p>
                    </div>
                </div>
                <div class="row m-top-20">
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-network.png"></p>
                        <h4>Региональная сеть</h4>
                        <p class="vacancy_text text-muted">
                            НСК широко представлена на территории Кыргызской Республики, на территории страны
                            страховую деятельность осуществляют 6 офисов, а также более 80 точек продаж.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-cap.png"></p>
                        <h4>Обучение</h4>
                        <p class="vacancy_text text-muted">
                            Заботу о вашем обучение НСК берет на себя. Обучение проводится на бесплатной основе при
                            ЦПНП (Центре подготовке и набора персонала) компании – единственной школе страхования по Кыргызской Республике.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="icon_vacancy" src="/img/vacancy-icon-teamwork.png"></p>
                        <h4>Командный дух</h4>
                        <p class="vacancy_text text-muted">
                            Мы – команда, единая в стремлении стать лучшей страховой компанией на нашем рынке
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-center-60">
                <hr style="margin-top: 30px; margin-bottom: 30px;">
                <div class="quoted-text">
                    <p class="vacancy_text text-muted">
                        Мы рассмотрим ваше резюме, даже если у вас нет опыта работы, но вы заинтересованы в профессиональном
                        развитии, карьерном росте и готовы стать частью нашей результативной и успешной команды.
                    </p>
                </div>
            </div>
        </div>

        <div class="row m-top-20" id="grow">
            <div class="col-md-12 bottom-image-container">
                <div class="img_text text-white">
                    <h3>Карьерный рост: Этапы карьеры</h3>
                    <br>
                    <div class="two-col-ul">
                        <ul class="vacancy_list">
                            <li>Обучение</li>
                            <li>Стажировка</li>
                            <li>Страховой агент</li>
                        </ul>
                        <ul class="vacancy_list">
                            <li>Менеджер по страхованию</li>
                            <li>Директор агентства</li>
                            <li>Директор филиала</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-center-60 m-top-40">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12" id="profit">
                                <h3>Почему у нас выгодно работать?</h3>
                                <p class="vacancy_text text-muted m-top-20">
                                    Основной доход состоит из комиссионных
                                    вознаграждений за продажу страховых услуг, колеблется от 5% до 30% и
                                    зависит от размера страховой премии по разным видам страхования:
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-right">
                        <p class="percent-big">
                            5%-30%
                        </p>
                        <p>
                            Составляет комиссия агента с каждой сделки.
                        </p>

                    </div>

                </div>
            </div>
        </div>


        <div class="row m-top-40">
            <div class="col-center-60" id="vacancy-tabs">
                <div class="tabs">
                    <input id="become-agent" type="radio" name="tabs" checked>
                    <label for="become-agent" title="Стать Страховым агентом">Стать Страховым агентом</label>

                    <input id="become-manager" type="radio" name="tabs">
                    <label for="become-manager" title="Стать менеджером по страхованию">Стать менеджером по
                        страхованию</label>


                    <section id="content-become-agent" class="vacancy-tab">
                        <p class="text-muted">
                            Страховой агент – это официальный представитель страховой компании, осуществляющий операции по
                            заключению договоров имущественного и личного страхования с физическими и юридическими лицами,
                            со свободным графиком работы и неограниченным заработком.
                        </p>
                        <br>
                        <p class="text-muted">
                            Работа страхового агента подходит для энергичных, общительных людей, нацеленных на результат.
                            Страховой агент помогает людям и организациям выбирать наиболее полную страховую защиту.
                        </p>
                        <p>
                            <a class="btn_vacancy m-top-20" href="/becomeagent" >Заполнить анкету</a>
                        </p>
                    </section>
                    <section id="content-become-manager" class="vacancy-tab">

                        <p class="text-muted">
                            Менеджер по страхованию — это штатный сотрудник, сосредоточенный на продвижении и продаже
                            страховых продуктов и услуг. Менеджер по страхованию умеет правильно проконсультировать клиента,
                            подобрать необходимые опции по продукту, помогает правильно рассчитать страховую премию.

                        </p>
                        <br>
                        <p class="text-muted">
                            Менеджер — одна из главных фигур в страховой компании, обладающий природным умом, ловкостью,
                            энергией и честностью.
                        </p>
                        <p>
                            <a class="btn_vacancy m-top-20" href="/becomeagent" >Заполнить анкету</a>
                        </p>

                    </section>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-center-60">
                <hr style="margin-top: 30px; margin-bottom: 30px;">
                <h3>Остались вопросы?</h3>
                <div class="phone-text m-top-20">
                    <div>
                        <p class="vacancy_text text-muted">
                            <small>Позвоните</small>
                        </p>
                        <h4 class="vacancy-h4">+996 555 904888</h4>
                    </div>
                </div>
                <div class="mail-text m-top-20">
                    <div>
                        <p class="vacancy_text text-muted">
                            <small>Напишите</small>
                        </p>
                        <a href="mailto:hr@nsk.kg"><h4 class="vacancy-h4">hr@nsk.kg</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
