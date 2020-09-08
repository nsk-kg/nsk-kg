@extends('layouts.app')

@section('content')

    <main class="py-4 container">

        <div class="row" >
           <div class="col-12">
               <p class="h2">Ответственность работодателя</p>
               Обязательное страхование гражданской ответственности перевозчика опасных грузов
           </div>
        </div>
        <div class="row" id="app">
            <div class="col-12">
                <osgopog-component></osgopog-component>
            </div>
        </div>
    </main>

@endsection
