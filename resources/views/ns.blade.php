@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/39.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-4">
                        Страхование от несчастных случаев
                    </p>
                    <p>
                        Внезапная травма — это серьезная неприятность.
                        Договор страхования НСК – круглосуточная защита на каждый день,
                        который компенсирует расходы на лечение в результате
                        несчастного случая и снизит уровень стресса.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row pt-5 mt-5" style="">
                <div class="col-3 ">
                    <button type="button" class="btn btn-light btn-lg btn-block">Расчитать и Оформить</button>
                </div>
            </div>
        </div>
    </div>

    <main class="py-4 container" id="app">

        <div class="row">
            <div class="col-12">
                <div class="wpb_wrapper">
                    <p><span style="font-weight: 400; font-size: 18px;">Страхование от несчастного случая обеспечивает материальную поддержку застрахованного, а также его семьи и близких в непредвиденных обстоятельствах. Страховую сумму можно выбрать самостоятельно, в зависимости от уровня дохода, и от того, насколько ваша жизнь и профессиональная деятельность подвержены рискам.</span>
                    </p>
                    <p><strong><span
                                style="font-size: 18px;">Страхование от несчастных случаев покрывает:</span></strong>
                    </p>
                    <ul>
                        <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">возмещение в случае травм и переломов&nbsp;</span>
                        </li>
                        <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">возмещение в случае инвалидности или смерти</span>
                        </li>
                    </ul>
                    <p><span style="font-weight: 400; font-size: 18px;">Для оформления страхового полиса от вас потребуется только документ, удостоверяющий личность, и заявление (письменное или устное) в страховую организацию.</span>
                    </p>
                    <p><span style="font-weight: 400; font-size: 18px;">Выплаты по травмам, переломам, тяжким телесным повреждениям осуществляются &nbsp;согласно таблице выплат, в которой установлен размер выплаты в % от страховой суммы в зависимости от тяжести страхового случая.</span>
                    </p>

                </div>
            </div>
        </div>

        <div class="row mt-5"
             style="border-radius: 20px; background-image:url('/img/40.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;height:625px">
            <div class="col-8 p-5 mt-5">
                <p class="mt-5">
                    1<a href="#" class="btn btn-link btn-lg">ПРОГРАММА СТРАХОВАНИЯ «БАЛАЛЫК» ДЛЯ ЛИЦ ОТ 3 ДО 18 ЛЕТ</a>
                </p>
                <p class="">
                    2<a href="#" class="btn btn-link btn-lg">ПРОГРАММА СТРАХОВАНИЯ «САЛАМАТ» ДЛЯ ЛИЦ ОТ 18 ДО 65 ЛЕТ</a>
                </p>
                <p class="">
                    3<a href="#" class="btn btn-link btn-lg">ПРОГРАММА СТРАХОВАНИЯ «ЧЕМПИОН» ДЛЯ СПОРТСМЕНОВ</a>
                </p>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12">
                <h4 class="p-2">Мы ответим на все вопросы:</h4>
                <div class="accordion mt-5" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Кто может быть застрахован?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Дети и взрослые до 65 лет, вне зависимости от вида деятельности.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Период действия страховой защиты
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                От 1 дня до 12 месяцев
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Какие документы нужно предоставить для получения страховой выплаты, если получил
                                    травму?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Заявление о наступление страхового случая
                                    <br>
                                    Заключение врача и рентгеновский снимок
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </main>

@endsection
