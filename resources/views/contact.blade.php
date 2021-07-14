@extends('layouts.app')

@section('content')

    <main class="py-4 container" id="app">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12 pt-3">
                <h3>Контакты</h3>
                <div class="row">
                    <div class="col-6">АДРЕС:</div>
                    <div class="col-6">Кыргызстан, Бишкек пер. Клубный 16 ул. Ибраимова 108</div>
                </div>
                <div class="row pt-2">
                    <div class="col-6">ТЕЛЕФОН:</div>
                    <div class="col-6">+996 312 888 180 +996 312 644-555</div>
                </div>
                <div class="row pt-2">
                    <div class="col-6">E-MAIL:</div>
                    <div class="col-6">info@nsk.kg</div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-xs-12 pt-3">
                <h3>Свяжитесь с нами</h3>
                <div class="row">
                    <div class="col-4"><input type="text" name="phone" class="form-control" placeholder="Телефон"></div>
                    <div class="col-4"><input type="text" name="email" class="form-control" placeholder="Email"></div>
                </div>
                <div class="row pt-3">
                    <div class="col-12">
                        <textarea name="message" class="form-control" placeholder="Ваше сообщение"></textarea>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12">
                        <button class="btn btn-info" style="color: #fff;" value="">Отправить сообщение</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <script charset="utf-8">new DGWidgetLoader({
                        "width": 1300,
                        "height": 600,
                        "borderColor": "#a3a3a3",
                        "pos": {"lat": 42.884419601120605, "lon": 74.58190699999999, "zoom": 13},
                        "opt": {"city": "bishkek"},
                        "org": [{"id": "70000001032815289"}, {"id": "70000001019362541"}]
                    });</script>

                <iframe frameborder="no"
                        style="border: 1px solid rgb(163, 163, 163); box-sizing: border-box; width: 100%; height: 583px;"
                        width="1200" height="600"
                        src="http://widgets.2gis.com/widget?type=firmsonmap&amp;options=%7B%22pos%22%3A%7B%22lat%22%3A42.884419601120605%2C%22lon%22%3A74.58190699999999%2C%22zoom%22%3A13%7D%2C%22opt%22%3A%7B%22city%22%3A%22bishkek%22%7D%2C%22org%22%3A%2270000001032815289%2C70000001019362541%22%7D"></iframe>
            </div>
        </div>
    </main>

@endsection
