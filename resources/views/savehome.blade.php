@extends('layouts.app')

@section('content')
    <div style="background-image:url('/img/2-2.jpg');  background-repeat: no-repeat;background-size: cover;background-position: bottom center;min-height:500px">
        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-sm-4">
                        Страхование домов и квартир
                    </p>
                    <p>
                        пожар, потоп, грабители или стихийное бедствие
                        — с НСК эти проблемы уже не страшны.<br>
                        Защитите свое имущество вместе с программой страхования от НСК
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <button type="button" class="btn btn-light btn-lg mt-5 mb-5">Расчитать и Оформить</button>
        </div>
    </div>

    <main class="pt-4 container" id="app">

        <div class="row">
            <div class="col-12">
                <div class="wpb_wrapper">
                    <p>Не важно, владеете вы имуществом или арендуете его, непредвиденные обстоятельства (например, порча или утрата), связанные с домом или квартирой, обычно наносят самый большой финансовый и эмоциональный ущерб.</p>
                    <p>В дополнение к страхованию можно застраховать любое домашнее имущество: предметы мебели, бытовую технику и др.</p>
                    <p><strong>Оформляя полис, Вы сами выбираете тот вариант страховой защиты, который Вам представляется оптимальным :</strong></p>
                    <ul>
                        <li>Огонь и Дым</li>
                        <li>Повреждение Водой</li>
                        <li>Противоправные действия третьих лиц</li>
                        <li>Стихийные бедствия</li>
                        <li>Удар молнии</li>
                        <li>Падение самолетов и других воздушных объектов, а также брошенных с них предметов</li>
                        <li>Взрыв, Взрыв паровых котлов, газо- и нефтехранилищ, газо- и нефтепроводов, машин, аппаратов и других аналогичных устройств</li>
                        <li>Кража со взломом или попытка кражи</li>
                        <li>Бой оконных стекол, зеркал и витрин</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="row mt-5"
             style="border-radius: 20px; background-image:url('/img/41.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;">
            <div class="col-md-8 col-xs-12 p-5">
                <p class="">
                    В рамках страховых программ страхуется квартира или дом, включая отделку, инженерное оборудование.<br>
                    Кроме того, страхуется гражданская ответственность клиента перед третьими лицами.<br>
                    Если в результате непредвиденного события, произошедшего в вашей квартире или доме, пострадало имущество или был нанесен вред жизни и здоровью ваших соседей, то весь ущерб будет покрыт в рамках действия страхового полиса.
                </p>
                <a href="" class="btn btn-info text-white">ПРОГРАММА СТРАХОВАНИЯ «УЮТНЫЙ ДОМ»</a>
                <br><br>
                <a href="" class="btn btn-info text-white">ПРОГРАММА СТРАХОВАНИЯ «КВАРТИРНОЕ ПРЕИМУЩЕСТВО» </a>
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
                                    Какой срок страхования по данному виду страхования?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    От 1 месяца до года.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Какие документы необходимы для заключения договора ДС Имущества?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="wpb_wrapper">
                                    <p>Для заключения договора ДС Имущества необходимы следующие документы:</p>
                                    <ul>
                                        <li>удостоверения личности (паспорта) с ИИН либо свидетельство о регистрации юридического лица;</li>
                                        <li>анкета-заявление (заполняется в офисе компании);</li>
                                        <li>акт осмотра и оценки застрахованного имущества;</li>
                                        <li>копию документа, подтверждающего право собственности Страхователя на объект недвижимости или договор аренды недвижимого имущества.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Что такое конструктивные элементы?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Это стены, пол и потолок, балкон или лоджия. То, что нельзя самостоятельно сломать или перестроить без специальных разрешений.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree6" aria-expanded="false"
                                        aria-controls="collapseThree6">
                                    Что такое внутренняя отделка и инженерные коммуникации?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Это отделка квартиры, двери, окна, восстановление скрытых коммуникаций: вода, газ, электричество и т.п..
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree4" aria-expanded="false"
                                        aria-controls="collapseThree4">
                                    Что такое ГО (гражданская ответственность)?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Это защита семейного бюджета от расходов за причиненный соседям ущерб (залив, пожар и пр.).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree5" aria-expanded="false"
                                        aria-controls="collapseThree5">
                                    Может ли арендатор застраховать арендованное помещение?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Арендатор имеет право застраховать имущество, которое он арендует. При этом, выгодоприобретателем будет являться собственник данного имущества.
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
