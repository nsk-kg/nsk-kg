@extends('layouts.app')

@section('content')
    <div style="background-image:url('/img/28.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center center;min-height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-sm-4">
                        Добровольное Страхование

                        Автогражданской Ответственности

                        – ДСАГО
                    </p>
                    <p class="lead">
                        Мы помогаем нашим Клиентам в любых конфликтных ситуациях на дорогах.
                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <button type="button" class="btn btn-light btn-lg mt-5 mb-5">Расчитать и Оформить</button>
        </div>
    </div>
    <main class="py-4 container" id="app">
        <div class="mt-5">
            <p>ДСАГО – это добровольное страхование гражданской ответственности владельцев автотранспортных средств.<br>
                Страхование на добровольной основе обуславливает страховку автогражданской ответственности водителя</p>
        </div>


        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 order-xs-1 order-md-2">

                <p><span style="font-size: 18px;"><b>Риски покрываемые ДСАГО:</b></span></p>
                <ul>
                    <li><span style="font-weight: 400;">Причинение вреда жизни и здоровью третьих лиц</span></li>
                    <li><span style="font-weight: 400;"> Ущерб, который владелец авто &nbsp;причинил имуществу</span>
                    </li>
                    <li>других участников дорожного движения.</li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12 order-xs-2 order-md-1">
                <img src="/img/31.png" width="400px" class="float-center w-xs-100">
            </div>

        </div>

        <div class="row">
            <div class="col-sm-6 col-xs-12 mt-5">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1553327411440">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"><h2 style="color: #c93500;text-align: left" class="vc_custom_heading">Минусы</h2>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <ul>
                                            <li style="font-weight: 400;"><span style="font-weight: 400;">невозможность получить компенсацию за ремонт собственной машины;</span>
                                            </li>
                                            <li style="font-weight: 400;"><span style="font-weight: 400;">отсутствие выплат, если виновник был за рулем в нетрезвом состоянии или покинул место аварии;</span>
                                            </li>
                                            <li style="font-weight: 400;"><span style="font-weight: 400;">отказ в компенсации, если ДТП совершил автомобиль, числящийся в угоне;</span>
                                            </li>
                                            <li style="font-weight: 400;"><span style="font-weight: 400;">если виновником ДТП стал водитель, не внесенный в договор.</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xs-12 mt-5">
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper"><h2 style="color: #2ca006;text-align: left" class="vc_custom_heading">Плюсы</h2>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">защитить интересы водителя в случае повреждения чужих автомобилей или иного имущества в случае ДТП;</span>
                                        </li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">возместить убытки за счет страховой организации;</span>
                                        </li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">покрыть все издержки по возмещению ущерба здоровью участников.</span>
                                        </li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Приятный нюанс: на цену ДСАГО не влияет количество водителей, допущенных к управлению конкретным транспортным средством.</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    1. Какие документы нужно предоставить Страховой Компании для того чтобы оформить
                                    ДСАГО?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Паспорт, технический паспорт на авто.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Могу ли я пользоваться страховкой ДСАГО на территории другой страны?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                Территория покрытия может быть расширена, но ДСАГО не освобождает Вас от приобретения
                                полиса Обязательного страхования автогражданской ответственности на территории других
                                Государств.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    3. Надо ли вызывать ГАИ при ДТП, если у меня оформлена страховка ДСАГО?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">ДА.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree4" aria-expanded="false"
                                        aria-controls="collapseThree4">
                                    4. Обязательно ли оформлять страховку ДСАГО на водителя, если он не является собственником автомобиля, но при этом ездит на нем?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Да, по данному виду страхователем может являться не только владелец авто.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>

@endsection
