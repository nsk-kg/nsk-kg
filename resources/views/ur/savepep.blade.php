@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/savepep1.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-4">
                        Страхование пассажиров
                    </p>
                    <p class="lead">
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
            <div class="col-6">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="/img/savepep2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Добровольное страхование пассажиров и водителя</h5>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="/img/savepep3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Обязательное страхование гражданской ответственности перевозчика перед пассажирами</h5>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>



    </main>

@endsection
