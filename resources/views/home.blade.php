@extends('layouts.app')

@section('content')
    <div id="app">
        <swipper-component></swipper-component>
    </div>
    <main class="container">

        <div class="row">
            <diw class="col-lg-6 pt-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/ensuranse">ПРОИЗОШЕЛ СТРАХОВОЙ СЛУЧАЙ</a></h5>
                        <p class="card-text">Если с вами произошел страховой случай, то оставьте нам заявку и мы
                            перезвоним вам для уточнения подробностей.</p>
                    </div>
                </div>
            </diw>
            <diw class="col-lg-6 pt-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/contact">ОФОРМИТЬ СТРАХОВОЙ ПОЛИС</a></h5>
                        <p class="card-text">Вы можете оформить или продлить полис по телефону или посетив один из наших
                            филиалов .</p>
                    </div>
                </div>
            </diw>
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

            <div class="jumbotron mt-5 m-4" style="background-color: #049EE1; color:#fff">
                <h1 class="display-sm-4">Почему именно НСК?</h1>
                <p> Уверенность в качестве страховых услуг НСК — это уверенность в повседневной жизни и работе всех
                    наших страхователей.</p>
                <div class="row pt-3" style="">
                    <div class="col-md-3 col-6 text-center">
                        <h1>13</h1>
                        <p class="card-text">лет Надежной работы</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <h1>150</h1>
                        <p class="card-text">миллионов сом Уставной капитал</p>
                    </div>

                    <div class="col-md-3 col-6 text-center">
                        <h1>39046</h1>
                        <p class="card-text"> Заключённых договоров страхования за три года</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <h1>47</h1>
                        <p class="card-text">миллионов сом Выплатили нашим клиентам за три года</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-sm-4 col-xs-12 order-sm-3">
                <img src="/img/12.png" alt="..." class="float-sm-right float-xs-center">
            </div>
            <div class="col-sm-8 pl-0 m-auto col-xs-12 order-sm-1">
                <h3>Оформить страховой полис за 15 минут!</h3>
                <form action="{{route('storyMessage')}}" method="post">
                    {{csrf_field()}}
                    <input class="form-control col-sm-8" type="text" placeholder="Имя" name="name" required>
                    <input class="form-control col-sm-8 mt-2" type="text" placeholder="Ваш номер телефона" name="phone" required>
                    <input type="submit" class="btn col-sm-8 col-lg-4 btn-primary mt-2" value="Отправить сообщение">
                </form>
            </div>

        </div>

        <div class="row text-center">

            <div class="col-lg-3 col-sm-6 mt-5">
                <img src="/img/12.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>С днем туризма!</h4>
            </div>

            <div class="col-lg-3 col-sm-6 mt-5">
                <img src="/img/13.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Страхование путешествий</h4>
            </div>

            <div class="col-lg-3 col-sm-6 mt-5">
                <img src="/img/14.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Как правильно вести себя на воде, чтобы не утонуть?</h4>
            </div>
            <div class="col-lg-3 col-sm-6 mt-5">
                <img src="/img/15.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Добровольное страхование домов</h4>
            </div>

        </div>
    </main>

@endsection
