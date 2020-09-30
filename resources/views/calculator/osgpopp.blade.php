@extends('layouts.app')

@section('content')

    <main class="py-4 container">

        <div class="row" >
           <div class="col-12">
               <p class="h2">Перевозчик перед пассажирами</p>
               Обязательное страхование гражданской ответственности перевозчика перед пассажирами
           </div>
        </div>
        <div class="row" id="app">
            <div class="col-12">
                <osgpopp-component></osgpopp-component>
            </div>
        </div>
    </main>

@endsection
