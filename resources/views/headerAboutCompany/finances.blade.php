@extends('layouts.app')

@section('content')

    <div class="py-4 container" id="app">
        <h1 class="display-sm-4">Финансовые показатели</h1>
        <div class="accordion mt-5" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingThree8">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                            Финансовые показатели
                        </button>
                    </h2>
                </div>
                <div id="collapseThree8" class="collapse show" aria-labelledby="headingThree8" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="/upload/Бух баланс за 2017 г с отметкой ГНИ.PDF">Бух баланс за 2017 г с отметкой ГНИ</a></li>
                            <li><a href="/upload/Бухбаланс за 2018 г..PDF">Бухбаланс за 2018 г.</a></li>
                            <li><a href="/upload/Баланс за декабрь 2019.pdf">Баланс за декабрь 2019</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
