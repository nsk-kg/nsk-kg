@extends('layouts.app')

@section('content')

    <div class="py-4 container" id="app">
        <h1 class="display-sm-4">Наши клиенты</h1>
        <swipper-work-component></swipper-work-component>
        <div class="accordion mt-5" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Рекомендательные письма
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li><a href="/upload/Письмо Текстоник.PDF">Письмо Текстоник</a></li>
                            <li><a href="/upload/Реемтсма.pdf">Реемтсма</a></li>
                            <li><a href="/upload/Рекомендации.PDF">Рекомендации</a></li>
                            <li><a href="/upload/Рекомендации_Чаарат.PDF">Рекомендации Чаарат</a></li>
                            <li><a href="/upload/Рекомендация_DKIB.PDF">Рекомендация DKIB</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
