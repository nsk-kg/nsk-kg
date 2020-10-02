@extends('layouts.app')

@section('content')
    <div id="app">
    <swipper-component></swipper-component>
    </div>
    <main class="py-4 container">

        <div class="row">
            <diw class="col-6">
                <div class="card" style="width: 35rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">ПРОИЗОШЕЛ СТРАХОВОЙ СЛУЧАЙ</a></h5>
                        <p class="card-text">Если с вами произошел страховой случай, то оставьте нам заявку и мы
                            перезвоним вам для уточнения подробностей.</p>
                    </div>
                </div>
            </diw>
            <diw class="col-6">
                <div class="card" style="width: 35rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">ОФОРМИТЬ СТРАХОВОЙ ПОЛИС</a></h5>
                        <p class="card-text">Вы можете оформить или продлить полис по телефону или посетив один из наших
                            филиалов .</p>
                    </div>
                </div>
            </diw>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h1 class="display-4">Наши услуги по страхованию:</h1>

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
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="card-group">
                            <div class="card m-2 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded mask flex-center" src="{{asset('/img/4.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование здоровья!</h5>
                                    <p class="card-text">Внезапная травма — это серьезная неприятность для взрослого
                                        человека..</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>

                            <div class="card m-2 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/6.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование путешествий</h5>
                                    <p class="card-text">Застрахуйте себя от внезапной болезни, травмы, потери или
                                        повреждения багажа при выезде за рубеж.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                            <div class="card m-2 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/5.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование Авто</h5>
                                    <p class="card-text">Как известно с каждым годом число ДТП на дорогах растет.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                            <div class="card m-2 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/7.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование недвижимости</h5>
                                    <p class="card-text">Моя квартира – основное имущество моей семьи.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>

                </div>

                <h3 class="p-2 display-5 mt-4">ДЛЯ БИЗНЕСА</h3>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active mt-4" id="home" role="tabpanel"
                         aria-labelledby="home-tab">

                        <div class="card-group">
                            <div class="card m-2 border-white shadow rounded hovereffect">
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

                            <div class="card m-2 border-white shadow rounded hovereffect">
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
                            <div class="card m-2 border-white shadow rounded hovereffect">
                                <img class="card-img-top rounded" src="{{asset('/img/10.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Страхование сотрудников от несчастных случаев</h5>
                                    <p class="card-text">Имущественный интерес Страхователя в случаях смерти,
                                        инвалидности, утраты трудоспособности.</p>
                                    <p class="card-text"><a href="">Подробнее</a></p>
                                </div>
                            </div>
                            <div class="card m-2 border-white shadow rounded hovereffect">
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...
                    </div>

                </div>

            </div>

            <div class="jumbotron mt-5 m-4" style="background-color: #049EE1; color:#fff">

                <h1 class="display-3">Почему именно НСК?</h1>
                <p> Уверенность в качестве страховых услуг НСК — это уверенность в повседневной жизни и работе всех
                    наших страхователей.</p>

                <div class="row pt-3" style="">
                    <div class="col-3 text-center">
                        <h1>13</h1>
                        <p class="card-text">лет Надежной работы</p>
                    </div>
                    <div class="col-3 text-center">
                        <h1>150</h1>
                        <p class="card-text">миллионов сом Уставной капитал</p>
                    </div>

                    <div class="col-3 text-center">
                        <h1>39046</h1>
                        <p class="card-text"> Заключённых договоров страхования за три года</p>
                    </div>
                    <div class="col-3 text-center">
                        <h1>47</h1>
                        <p class="card-text">миллионов сом Выплатили нашим клиентам за три года</p>
                    </div>
                </div>

            </div>


        </div>
        <div class="row mt-5 mb-5"
             style="background-image:url('/img/12.png');  background-repeat: no-repeat;background-position: right top;height:200px">
            <div class="col-6">
                <h3 class="p-2 display-5 mt-4">Оформить страховой полис за 15 минут!</h3>
                <form action="{{route('storyMessage')}}" method="post">
                    {{csrf_field()}}
                    <input class="form-control col-5 ml-2" type="text" placeholder="Имя" name="name" required>
                    <input class="form-control col-5 ml-2 mt-2" type="text" placeholder="Ваш номер телефона" name="phone" required>
                    <input type="submit" class="btn btn-primary  ml-2 mt-2" value="Отправить сообщение">
                </form>
            </div>
            <div class="col-4 text-left ">
                <h2 class="mt-4 p-2 display-5">
                    <img src="/img/phone.svg" width="40px" height="40px"> +996 312 888 180
                </h2>
            </div>
        </div>

        <div class="row mt-5 text-center">

            <div class="col-lg-3">
                <img src="/img/12.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>С днем туризма!</h4>
            </div>

            <div class="col-lg-3">
                <img src="/img/13.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Страхование путешествий</h4>
            </div>

            <div class="col-lg-3">
                <img src="/img/14.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Как правильно вести себя на воде, чтобы не утонуть?</h4>
            </div>
            <div class="col-lg-3">
                <img src="/img/15.jpg" class="rounded-circle" alt="..." width="160" height="160">
                <h4>Добровольное страхование домов</h4>
            </div>

        </div>
    </main>

@endsection
