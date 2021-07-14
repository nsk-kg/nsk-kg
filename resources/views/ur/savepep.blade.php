@extends('layouts.app')

@section('content')
    <div style="background-image:url('/img/savepep1.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;min-height:500px">
        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-sm-4">
                        Страхование пассажиров
                    </p>
                    <p class="lead">
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <button type="button" class="btn btn-light btn-lg mt-5 mb-5">Расчитать и Оформить</button>
        </div>
    </div>
    <main class="container" id="app">
        <div class="row">
            <div class="col-md-6 col-xs-12 py-4">
                <div class="card float-center h-100 w-md-100" style="width: 25rem;">
                    <img class="card-img-top" src="/img/savepep2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Добровольное страхование пассажиров и водителя</h5>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 py-4">
                <div class="card float-center h-100 w-md-100" style="width: 23rem;">
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
