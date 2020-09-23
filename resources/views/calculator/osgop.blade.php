@extends('layouts.app')

@section('content')

    <main class="py-4 container">

        <div class="row" >
           <div class="col-12">
               <p class="h2">Ответственность работодателя</p>
           </div>
        </div>
        <div class="row" id="app">
            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class="col-12">
                <osgop-component csrf="{{csrf_token()}}"></osgop-component>
            </div>
        </div>
    </main>

@endsection
