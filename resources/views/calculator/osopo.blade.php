@extends('layouts.app')

@section('content')

    <main class="py-4 container">

        <div class="row" >
           <div class="col-12">
               <p class="h2">Страхование гражданской ответственности организаций, эксплуатирующих опасные производственные объекты</p>
           </div>
        </div>
        <div class="row" id="app">
            <div class="col-12">
                <osopo-component></osopo-component>
            </div>
        </div>
    </main>

@endsection
