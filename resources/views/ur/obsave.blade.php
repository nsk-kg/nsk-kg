@extends('layouts.app')

@section('content')
    <div class=""
         style="background-image:url('/img/obsave1.jpg');  background-repeat: no-repeat;background-size: cover;background-position: center top;background-attachment: fixed;height:500px">

        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-4">
                        Обязательное страхование
                        гражданской ответственности
                        перевозчика опасных грузов
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
        <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>Страхование осуществляется на основании Закона КР от 04.08.08 г. № 188 «Об обязательном страховании гражданской ответственности перевозчика опасных грузов».</p>
                    <p>&nbsp;</p>
                    <p><strong>Что является объектом страхования?</strong></p>
                    <p>Объектом обязательного страхования являются имущественные интересы Страхователя, связанные с его обязанностью установленных гражданским законодательством Кыргызской Республики, возместить ущерб причиненный жизни, здоровью, материальным ценностям третьих лиц и окружающей среде, в процессе перевозки опасных грузов.</p>
                    <p>&nbsp;</p>
                    <p><strong>Что является страховым случаем?</strong></p>
                    <p>Свершившееся событие, с наступлением которого у Страхователя, выступающего в качестве грузоперевозчика, возникает обязанность возместить ущерб, нанесенный жизни, здоровью, имуществу третьих лиц и окружающей среде в связи с использованием транспортного средства при перевозке опасных грузов и возникший в силу причин внезапного, непредвиденного и непреднамеренного характера, подтвержденный фактом предъявления Страхователю обоснованных претензий или исков о возмещении вреда со стороны Третьих лиц.</p>
                    <p>&nbsp;</p>
                    <p><strong>Какой должен быть размер страховой суммы?</strong></p>
                    <p>Страховая сумма зависит от класса опасного груза и грузоподъемности грузового транспортного средства и не может быть меньше установленных минимальных страховых сумм, согласно следующей таблице:</p>
                    <p>Классы риска Минимальный размер страховой суммы, в сомах Грузовое транспортное средство до 2,5 тонн до 5 тонн до 7,5 тонн до 10 тонн до 12,5 тонн до 15 тонн до 20 тонн свыше 20 тонн</p>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td rowspan="3"><span style="font-weight: 400;">Классы</span><p></p>
                                <p><span style="font-weight: 400;">риска</span></p></td>
                            <td colspan="8"><span style="font-weight: 400;">Минимальный размер страховой суммы, в сомах</span></td>
                        </tr>
                        <tr>
                            <td colspan="8"><span style="font-weight: 400;">Грузовое транспортное средство</span></td>
                        </tr>
                        <tr>
                            <td><span style="font-weight: 400;">до 2,5 тонн</span></td>
                            <td><span style="font-weight: 400;">до 5 тонн</span></td>
                            <td><span style="font-weight: 400;">до 7,5 тонн</span></td>
                            <td><span style="font-weight: 400;">до 10 тонн </span></td>
                            <td><span style="font-weight: 400;">до 12,5 тонн </span></td>
                            <td><span style="font-weight: 400;">до 15 тонн</span></td>
                            <td><span style="font-weight: 400;">до 20 тонн</span></td>
                            <td><span style="font-weight: 400;">свыше 20 тонн</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 1 — </b><p></p>
                                <p><span style="font-weight: 400;">взрывчатые</span></p>
                                <p><span style="font-weight: 400;">вещества</span></p></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5500000</span></td>
                            <td><span style="font-weight: 400;">8000000</span></td>
                            <td><span style="font-weight: 400;">10500000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">17000000</span></td>
                            <td><span style="font-weight: 400;">20000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 2</b><span style="font-weight: 400;"> — газы сжатые, сжиженные и растворенные под давлением</span></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">500000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">1000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">1000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">2000000</span></p></td>
                            <td><span style="font-weight: 400;">от </span><p></p>
                                <p><span style="font-weight: 400;">1750000 </span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">3500000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">3250000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">5000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">3250000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">6500000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">4000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">8000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">5000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">10000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">6000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">12000000</span></p></td>
                        </tr>
                        <tr>
                            <td><b>Класс 3 —</b><span style="font-weight: 400;"> легковоспламеняющиеся жидкости</span></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">500000</span></p>
                                <p><span style="font-weight: 400;">до 1000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">1000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">2000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">1750000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">3500000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">2500000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">5000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">3250000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">6500000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">4000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">8000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">5000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">10000000</span></p></td>
                            <td><span style="font-weight: 400;">от</span><p></p>
                                <p><span style="font-weight: 400;">6000000</span></p>
                                <p><span style="font-weight: 400;">до</span></p>
                                <p><span style="font-weight: 400;">12000000</span></p></td>
                        </tr>
                        <tr>
                            <td><b>Класс 4 —</b><span style="font-weight: 400;"> легковоспламеняющиеся вещества и</span><p></p>
                                <p><span style="font-weight: 400;">материалы</span></p></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5500000</span><p></p>
                                <p><span style="font-weight: 400;">&nbsp;</span></p></td>
                            <td><span style="font-weight: 400;">8000000</span></td>
                            <td><span style="font-weight: 400;">10500000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">17000000</span></td>
                            <td><span style="font-weight: 400;">20000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 5 —</b><span style="font-weight: 400;"> окисляющие вещества и органические перекиси</span></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5000000</span></td>
                            <td><span style="font-weight: 400;">7000000</span></td>
                            <td><span style="font-weight: 400;">9000000</span></td>
                            <td><span style="font-weight: 400;">11000000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">16000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 6 —</b><span style="font-weight: 400;"> ядовитые (токсичные) вещества</span></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5500000</span></td>
                            <td><span style="font-weight: 400;">8000000</span></td>
                            <td><span style="font-weight: 400;">10500000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">17000000</span></td>
                            <td><span style="font-weight: 400;">20000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 7 —</b><span style="font-weight: 400;"> радиоактивные и инфекционные</span><p></p>
                                <p><span style="font-weight: 400;">вещества</span></p></td>
                            <td><span style="font-weight: 400;">2000000</span></td>
                            <td><span style="font-weight: 400;">4000000</span></td>
                            <td><span style="font-weight: 400;">7000000</span></td>
                            <td><span style="font-weight: 400;">10000000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">16000000</span></td>
                            <td><span style="font-weight: 400;">20000000</span></td>
                            <td><span style="font-weight: 400;">24000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 8 —</b><span style="font-weight: 400;"> едкие и коррозийные вещества</span></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5000000</span></td>
                            <td><span style="font-weight: 400;">7000000</span></td>
                            <td><span style="font-weight: 400;">9000000</span></td>
                            <td><span style="font-weight: 400;">11000000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">16000000</span></td>
                        </tr>
                        <tr>
                            <td><b>Класс 9 —</b><span style="font-weight: 400;"> прочие опасные вещества</span></td>
                            <td><span style="font-weight: 400;">1500000</span></td>
                            <td><span style="font-weight: 400;">3000000</span></td>
                            <td><span style="font-weight: 400;">5000000</span></td>
                            <td><span style="font-weight: 400;">7000000</span></td>
                            <td><span style="font-weight: 400;">9000000</span></td>
                            <td><span style="font-weight: 400;">11000000</span></td>
                            <td><span style="font-weight: 400;">13000000</span></td>
                            <td><span style="font-weight: 400;">16000000</span></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p><strong>Как рассчитывается страховая премия?</strong></p>
                    <p>Годовая страховая премия за одну единицу грузового транспортного средства равна произведению базового страхового тарифа на минимальный размер страховой суммы.</p>
                    <p>Базовый страховой тариф равен 1 %</p>

                </div>
            </div>
        </div>

    </main>

@endsection
