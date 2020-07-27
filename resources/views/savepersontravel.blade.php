@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/35.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-4">
                        Страхование выезжающих за рубеж


                    </p>

                    <p class="lead">
                    <ul>
                        <li>страхование здоровья</li>
                        <li>страхование багажа</li>
                        <li>отмена поездки и другие риски</li>
                    </ul>

                    </p>
                    <h1>
                        Мы сделаем все возможное, чтобы ваше пребывание за рубежом принесло вам только положительные эмоции!


                    </h1>

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
               <div class="wpb_text_column wpb_content_element ">
                   <div class="wpb_wrapper">
                       <p><strong><span style="font-size: 20px;">Собираетесь за границу на отдых, в командировку или учебу? </span></strong></p>
                       <p><span style="font-weight: 400; font-size: 18px;">Страхование туристов в НСК компенсирует дорогостоящее лечение в случае внезапного заболевания или травмы. А это может повлечь за собой госпитализацию и счет на крупную сумму за оказанные медицинские услуги и лекарства.</span></p>
                       <p><span style="font-weight: 400; font-size: 18px;">Страховка убережет от крупных незапланированных трат на лечение за рубежом.</span></p>
                       <p><b><span style="font-size: 18px;">Страховыми случаями по полису ВЗР являются:</span></b></p>
                       <ul>
                           <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">внезапные заболевания застрахованного лица в период действия страховой защиты;</span></li>
                           <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">телесные повреждения (вред здоровью), полученные в результате несчастного случая;</span></li>
                           <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">острая зубная боль, возникшая в результате острого воспаления зуба и/или окружающих его тканей, или челюстная травма, полученная в результате несчастного случая;</span></li>
                           <li style="font-weight: 400; font-size: 18px;"><span style="font-weight: 400;">расходы, в связи со смертью застрахованного лица, связанные с репатриацией останков застрахованного лица.</span></li>
                       </ul>

                   </div>
               </div>
           </div>
        </div>

        <div class="row mt-5" style="background-color:#F3F3F3;" >
            <div class="col-8 p-4">
                <div class="wpb_wrapper"><h3 class="sc_title sc_title_regular"><span style="font-weight: 400;">Получение помощи 24/7</span></h3>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p><span style="font-weight: 400;">Для получения экстренной медицинской и другой помощи Вам необходимо:</span></p>
                            <ol>
                                <li><span style="font-weight: 400;"> Связаться с круглосуточным Центром помощи </span><b>Сервисной компании AP Companies</b><span style="font-weight: 400;">. </span></li>
                                <li><span style="font-weight: 400;"> Сообщить следующую информацию: </span></li>
                            </ol>
                            <ul>
                                <li><span style="font-weight: 400;">Вашу фамилию, имя, номер полиса, срок действия &nbsp;полиса.</span></li>
                                <li>Что Вы застрахованы в компании ЗАО «НСК»</li>
                                <li>Причину обращения за помощью.</li>
                                <li>Ваше местонахождение (страна, город).</li>
                                <li>Код и номер телефона</li>
                            </ul>
                            <ol start="3">
                                <li><span style="font-weight: 400;"> Сохранить документ, подтверждающий оплату телефонного звонка </span><span style="font-weight: 400;">в AP Companies – по возвращении страховая компания оплатит его.</span>Для связи с Сервисной компанией AP Companies можно воспользоваться&nbsp; SKYPE: <b>ap.companies.ru&nbsp;</b>круглосуточным прямым номером <b>+7 495 989 11 20&nbsp;</b>SMS на номер<b> +7 905 736 25 86.</b></li>
                            </ol>
                            <p><span style="font-weight: 400;">Если по каким либо причинам, &nbsp;Вы не можете связаться с сервисной службой, </span><span style="font-weight: 400;">свяжитесь со своим туристическим агентством или </span><span style="font-weight: 400;">с менеджером страховой компании ЗАО «НСК»: &nbsp;</span><b>+966&nbsp;703/557&nbsp;137&nbsp;570</b></p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <img src="/img/37.png" >
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
                                    Полис «Выезжающих за рубеж» подходит для получения Шенген визы?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    ПаПолис признается консульствами и посольствами всех стран
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Какие случаи не покрывает страховка "Выезжающих за рубеж"?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Хронические заболевания, онкология;&nbsp;</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Расходы, связанные с беременностью (включая осложнения) и прерыванием &nbsp; &nbsp; беременности (кроме несчастных случаев, представляющих непосредственную угрозу жизни Застрахованной, в сроке не более 12 недель);</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Расходы связанные с родами и родовспоможением;</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Солнечный ожог;</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Аллергии и дерматиты, связанные с солнечным ожогом;</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Сахарный диабет (I и II типа);</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Хроническая почечная недостаточность, требующая проведения внепочечного &nbsp;очищения крови</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Имеются ли подлимиты по страховой сумме?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p style="text-align: justify;">НСК несет ответственность в пределах всей страховой суммы по всем страховым рискам, кроме стоматологии. На стоматологию выплаты производятся в пределах 200 долл.США.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree4" aria-expanded="false"
                                        aria-controls="collapseThree4">
                                    На какую сумму лучше застраховаться?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p><ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Минимальная страховая сумма для стран зоны Шенгенского соглашения 30&nbsp;000 евро. </span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Для стран СНГ от 1&nbsp;000 долл. США.</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Для других стран от 15&nbsp;000 долл. США.</span></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree4" aria-expanded="false"
                                        aria-controls="collapseThree4">
                                    С какими компаниями-ассистанс сотрудничает НСК по страхованию "Выезжающих за рубеж"?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Мы работаем с лучшей ассистонской компанией.
                                    AP Companies – одна из ведущих компаний в мире среди медицинских ассистансов
                                    Головной офис AP Companies расположен в Испании. Офисы и контакт-центры АР работают круглосуточно в нескольких странах мира.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree5" aria-expanded="false"
                                        aria-controls="collapseThree4">
                                    Может ли Туристическая компания стать партнером по страхованию «Выезжающих за рубеж»?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Если Вы работаете в сфере туризма, Вы можете стать нашим Агентом, для этого Вам нужно выслать на почту компании Свидетельство о регистрации, реквизиты, паспорт директора и наш специалист свяжется с Вами.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div></div>
    </main>

@endsection
