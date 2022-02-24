@extends('layouts.app')

@section('content')
    <div id="app">
        <swipper-component></swipper-component>
        <main class="container">

            <div class="row scheme-row">
                <section class="scheme">
                    <div class="container">
                        <div class="scheme-content">
                            <h3 class="scheme-title">Стать страховым агентом</h3>
                            <ul class="scheme-list">
                                <li class="scheme-item">
                                    <figure class="scheme-icon"><img src="/img/icons/agent-check.svg" alt="" class="scheme-icon-img">
                                    </figure>
                                    <p class="scheme-description">Ознакомтесь с условиями</p>
                                </li>
                                <li class="scheme-item">
                                    <figure class="scheme-icon"><img src="/img/icons/agent-doc.svg" alt="" class="scheme-icon-img">
                                    </figure>
                                    <p class="scheme-description">Заполните анкету или свяжитесь с нами</p>
                                </li>
                                <li class="scheme-item">
                                    <figure class="scheme-icon"><img src="/img/icons/agent-done.svg" alt="" class="scheme-icon-img">
                                    </figure>
                                    <p class="scheme-description">Мы ответим вам в течение нескольких рабочих дней</p>
                                </li>
                            </ul>
                            <a href="/companyWork" class="btn btn--primary">
                                Перейти к вакансиям
                            </a>
                        </div><!-- end .scheme-content -->
                    </div><!-- end .container -->
                    <div class="scheme-image">
                                <figure>
                                    <img src="{{asset('/img/agent-become.png')}}" alt="" class="swiper-image-img">
                                </figure>
                    </div><!-- end .swiper-container -->
                </section><!-- end .scheme -->
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h1 class="display-sm-4">Наши услуги по страхованию:</h1>

                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12">

                    <blockquote class="blockquote">
                        <p class="mb-0">Уверенность в качестве страховых услуг НСК - это уверенность в повседневной жизни и
                            работе всех
                            наших страхователей. НСК –надежная страховая компания.</p>
                    </blockquote>


                </div>
            </div>

            <div class="row mt-4">

                <div class="col-12">
                    <h4 class="p-2">ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded mask flex-center" src="{{asset('/img/4.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование здоровья!</h5>
                                    <p class="card-text">Внезапная травма — это серьезная неприятность для взрослого
                                        человека..</p>
                                    <p class="card-text"><a href="/ns">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/6.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование путешествий</h5>
                                    <p class="card-text">Застрахуйте себя от внезапной болезни, травмы, потери или
                                        повреждения багажа при выезде за рубеж.</p>
                                    <p class="card-text"><a href="/savepersontravel">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/5.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование Авто</h5>
                                    <p class="card-text">Как известно с каждым годом число ДТП на дорогах растет.</p>
                                    <p class="card-text"><a href="/kasko">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/7.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование недвижимости</h5>
                                    <p class="card-text">Моя квартира – основное имущество моей семьи.</p>
                                    <p class="card-text"><a href="/savehome">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="p-2 display-5 mt-4">ДЛЯ БИЗНЕСА</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded mask flex-center" src="{{asset('/img/8.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Имущество компаний</h5>
                                    <p class="card-text">Имущественные интересы Страхователя и/или
                                        Выгодоприобретателя, связанные с владением, пользованием и распоряжением
                                        имуществом и строениями.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/9.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Мед страхование</h5>
                                    <p class="card-text">Имущественный интерес Страхователя, связанный с
                                        материальными затратами на оказание Застрахованному медицинской
                                        помощи.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/10.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование сотрудников от несчастных случаев</h5>
                                    <p class="card-text">Имущественный интерес Страхователя в случаях смерти,
                                        инвалидности, утраты трудоспособности.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-1">
                            <div class="card p-1 w-100 h-100 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/11.png')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Финансовые риски</h5>
                                    <p class="card-text">Имущественные интересы Страхователя, связанные с риском
                                        возникновения убытков в результате потери дохода.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <h2 class="mt-5">Наши партнеры</h2>
                <swipper-sm-component></swipper-sm-component>

                <div class="jumbotron mt-5 m-4" style="background-color: #049EE1; color:#fff">
                    <h1 class="display-sm-4">Почему именно НСК?</h1>
                    <p> Уверенность в качестве страховых услуг НСК — это уверенность в повседневной жизни и работе всех
                        наших страхователей.</p>
                    <div class="row pt-3 numbers" style="">
                        <div class="col-md-3 col-6 text-center">
                            <h3 class="value display-sm-4">15</h3>
                            <p class="card-text">лет Надежной работы</p>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <h3 class="value display-sm-4">150</h3>
                            <p class="card-text">миллионов сом Уставной капитал</p>
                        </div>

                        <div class="col-md-3 col-6 text-center">
                            <h3 class="value display-sm-4">39046</h3>
                            <p class="card-text"> Заключённых договоров страхования за три года</p>
                        </div>
                        <div class="col-md-3 col-6 text-center">
                            <h3 class="value display-sm-4">47</h3>
                            <p class="card-text">миллионов сом Выплатили нашим клиентам за три года</p>
                        </div>
                    </div>
                </div>
            </div>
            <office-modal></office-modal>
            <div class="row text-center d-flex justify-content-center">

                <div class="col-lg-3 col-sm-6 mt-5 office-block">
                    <img src="/img/12.jpg" class="rounded-circle" alt="..." width="160" height="160">
                    <h4>С днем туризма!</h4>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5 office-block">
                    <img src="/img/13.jpg" class="rounded-circle" alt="..." width="160" height="160">
                    <h4>Страхование путешествий</h4>
                </div>

                <div class="col-lg-3 col-sm-6 mt-5 office-block">
                    <img src="/img/14.jpg" class="rounded-circle" alt="..." width="160" height="160">
                    <h4>Как правильно вести себя на воде, чтобы не утонуть?</h4>
                </div>
                <div class="col-lg-3 col-sm-6 mt-5 office-block">
                    <img src="/img/15.jpg" class="rounded-circle" alt="..." width="160" height="160">
                    <h4>Добровольное страхование домов</h4>
                </div>

            </div>

            <h2 class="mt-5">Наши клиенты</h2>
            <swipper-work-component></swipper-work-component>
            <div class="accordion mt-5" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Рекомендательные письма
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li><a href="/upload/Письмо Текстоник.PDF">Письмо Текстоник</a></li>
                                <li><a href="/upload/Реемтсма.pdf">Реемтсма</a></li>
                                <li><a href="/upload/Рекомендации.PDF">Рекомендации</a></li>
                                <li><a href="/upload/Рекомендации_Чаарат.PDF">Рекомендации Чаарат</a></li>
                                <li><a href="/upload/Рекомендация_DKIB.PDF">Рекомендация DKIB</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection
