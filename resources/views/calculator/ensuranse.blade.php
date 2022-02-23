@extends('layouts.app')

@section('content')

    <main class="py-4 container">

        <div class="row">
            <div class="col-12">
                <p class="h2">Произошел страховой случай</p>
            </div>
        </div>

        {{ Form::open(array('url' => '/ensuranse/create', 'method' => 'post', 'files' => true)) }}

        <div class="row" id="app">

            <div class="col-sm-6 col-xs-12">
                <label>Имя</label>
                <input type="text" name="firstName" class="form-control ">
                <label>Фамилия</label>
                <input type="text" name="MidleName" class="form-control ">
                <label>Отчество</label>
                <input type="text" name="MidleName" class="form-control ">
                <label>Продукт</label>
                <select name="product" class="form-control ">
                    <option value="1">ОГПО</option>
                    <option value="2">ДС ГПО автовладельцев</option>
                    <option value="3">КАСКО</option>
                    <option value="4">Недвижимость</option>
                    <option value="5">Несчастный случай</option>
                    <option value="6">Путешествие</option>
                    <option value="7">Медицинское страхование</option>
                </select>
            </div>

            <div class="col-sm-6 col-xs-12">
                <label>Номер полиса</label>
                <input type="text" name="polis" class="form-control ">
                <label>Телефон</label>
                <input type="text" name="telephone" class="form-control ">
                <label>Документы</label>
                {{ Form::file('image', ['class'=>'form-control '])}}
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <label>Описание</label>
                <textarea name="polis" class="form-control "></textarea>
                {{Form::submit('Отправить', ['class'=>'btn btn-success mt-2'])}}
            </div>
        </div>

        {{ Form::close() }}
    </main>

@endsection
