@extends('layouts.app')

@section('content')
    <div style="background-image:url('/img/32.jpg');background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;min-height:500px">

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

    <main class="py-4 container" id="app">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 col-xs-6">
                        <img src="/img/33.jpg" class="w-100">
                    </div>
                    <div class="col-lg-12 col-xl-6 col-xs-6 mt-3">
                        <p>
                            Добровольное страхование пассажиров и водителя
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 col-xs-6">
                        <img src="/img/34.jpg" class="w-100">
                    </div>
                    <div class="col-lg-12 col-xl-6 col-xs-6 mt-3">
                        <p>
                            Обязательное страхование гражданской ответственности перевозчика перед пассажирами
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
