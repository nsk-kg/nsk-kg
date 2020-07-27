@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/32.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

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
                <div class="row">
                    <div class="col-6">
                        <img src="/img/33.jpg" width="200px">
                    </div>
                    <div class="col-6 mt-3">
                        <p>
                            Добровольное страхование пассажиров и водителя
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <img src="/img/34.jpg" width="200px">
                    </div>
                    <div class="col-6 mt-3">
                        <p>
                            Обязательное страхование гражданской ответственности перевозчика перед пассажирами
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
