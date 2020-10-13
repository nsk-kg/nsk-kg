@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/20.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-4">
                        КАСКО
                    </p>
                    <p class="lead">
                        Заключив договор страхования своей машины, вы снизите до минимума риски,<br> связанные с
                        использованием личного авто.<br>
                        Застрахованный водитель чувствует себя уверенней и спокойнее.
                    </p>

                </div>
            </div>
        </div>
        <div class="container">

            <div class="row pt-5 mt-5" style="">
                <div class="col-3 ">
                    <a href="/contact" type="button" class="btn btn-light btn-lg btn-block">Расчитать и Оформить</a>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4 container" id="app">
        <div class="mt-5">
            <p>КАСКО – это возможность получения возмещения ущерба при любом ДТП, вне зависимости от того является
                владелец автомобиля виновником аварии или же пострадавшим. Кроме того, компания возмещает ущерб, в
                случае угона автомобиля или же его, как частичного, так и полного повреждения.</p>
        </div>


        <div class="row text-center">
            <div class="col-12">
                <b-card-group deck>

                    <b-card
                        title="Ущерб после ДТП"
                        img-src="/img/21.jpg"
                        img-alt="Image"
                        img-top
                    >
                        <b-card-text>

                        </b-card-text>
                    </b-card>


                    <b-card title="Угон автомобиля" img-src="/img/22.jpg" img-alt="Image" img-top>
                        <b-card-text>
                        </b-card-text>
                    </b-card>

                    <b-card title="Хищение частей автомобиля" img-src="/img/23.jpg" img-alt="Image" img-top>
                        <b-card-text>
                        </b-card-text>
                    </b-card>


                </b-card-group>
            </div>

        </div>

        <div class="row text-center mt-5">
            <div class="col-12">
                <b-card-group deck>


                    <b-card title="Падение или попадание  инородного объекта" img-src="/img/24.jpg" img-alt="Image"
                            img-top>
                        <b-card-text>
                        </b-card-text>
                    </b-card>

                    <b-card title="Повреждения от действий животных" img-src="/img/25.jpg" img-alt="Image" img-top>
                        <b-card-text>
                        </b-card-text>
                    </b-card>

                    <b-card title="Пожар, взрыв" img-src="/img/26.jpg" img-alt="Image" img-top>
                        <b-card-text>
                        </b-card-text>
                    </b-card>


                </b-card-group>
            </div>

        </div>

        <div class="row mt-5">

            <div class="col-4 pt-5">
                <p>
                    <a href="" class="btn btn-info text-white">Программа страхования "АВТО ЗА СТО"</a>
                </p>
                <p>
                    <a href="" class="btn btn-info text-white">ОБОЮДНЫЙ ИНТЕРЕС</a>
                </p>
            </div>
            <div class="col-4">
                <img src="/img/29.png">
            </div>
        </div>


        <div class="row mt-4">

            <div class="col-12">
                <h4 class="p-2">Мы ответим на все вопросы:</h4>
                <div class="accordion mt-5" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    1. Разница между ДСАГО и КАСКО?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    <div class="wpb_wrapper">
                                <p style="text-align: justify;">Простым языком страховка КАСКО это когда Вы страхуете
                                    свой автомобиль от любых неприятностей, которые могут возникнуть на дороге и во
                                    время стоянки.</p>
                                <ul>
                                    <li>У Вас угнали автомобиль, страховая компания выплатит Вам стоимость автомобиля.
                                    </li>
                                    <li>Вы попали в аварию, страховая компания отремонтирует Вам повреждённый
                                        автомобиль.
                                    </li>
                                    <li>Вы не справились с управлением и съехали в канаву, страховая компания
                                        отремонтирует Ваш автомобиль.
                                    </li>
                                    <li>На Ваш автомобиль упал лёд с крыши, страховая компания отремонтирует.</li>
                                    <li>На стоянке у Вас украли зеркало или поцарапали машину, страховая компания
                                        отремонтирует Ваш автомобиль.
                                    </li>
                                </ul>
                                <ul style="text-align: justify;">
                                    <li>Камень на дороге разбил Вам стекло или треснула фара, страховая компания
                                        отремонтирует Ваш автомобиль.
                                    </li>
                                </ul>
                                <p style="text-align: justify;">Покупая полис ДСАГО Вы страхуете себя от следующей
                                    ситуации: Вы по неосторожности попали в ДТП, Вас признали виновным, Вы разбили
                                    дорогую машину, в этом случае по полису ДСАГО страховая компания заплатит деньги
                                    пострадавшему за Вас в пределах выбранного Вами лимита ответственности</p>

                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Что такое Франшиза?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Франшиза по страховке КАСКО это некая величина нанесённого Вам ущерба, которую не платит
                            страховая компания по каждому страховому случаю.

                            Например: При заключении договора КАСКО, Вы оговорили франшизу 7000 сом.

                            Соответственно если Вы попали в ДТП и стоимость ремонта 40 000 сом, то 33 000 сом за Вас
                            заплатит страховая компания, а 7 000 платите Вы.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Что делать при ДТП?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <p style="text-align: justify;">Сообщить незамедлительно о случившемся в ближайший орган
                                внутренних дел, записать фамилии и адреса очевидцев и ожидать прибытия сотрудников
                                органов внутренних дел.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                4. Какие выплаты могут получить пассажиры в личном авто?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Страховые выплаты по страхованию от несчастных случаев производится в пределах выбранного
                                вами лимита на каждое застрахованное место по таблице выплат в процентом соотношении в
                                зависимости от степени травмы.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree5">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                            5. Можно ли оплатить страховую премию в рассрочку?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5"
                     data-parent="#accordionExample">
                    <div class="card-body">
                        <p>
                            Если Ваша страховая премия превышает 200 долларов США, то вы можете оплатить в три платежа.
                            Но при наступлении страхового случая Вы получите страховое возмещение за минусом.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


    </main>

@endsection
