@extends('layouts.app')

@section('content')
    <div style="background-image:url('/img/gruz1.jpg'); background-repeat: no-repeat;background-size: cover;background-position: center center;min-height:500px;">
        <div class="container">
            <div class="row pt-5 " style="color:#fff">
                <div class="col-12">
                    <p class="display-sm-4">
                        Страхование грузов
                    </p>
                    <p class="lead">
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <button type="button" class="btn btn-light btn-lg mt-5 mb-5">Расчитать и Оформить</button>
        </div>
    </div>
    <main class="py-4 container" id="app">
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p><strong>Общие&nbsp; положения </strong></p>
                            <p>ЗАО «НСК» (далее – «НСК») заключает договоры страхования грузов с кыргызскими и иностранными юридическими.</p>
                            <p>Страхование производится в соответствии с Правилами добровольного страхования грузов НСК. Лицензия №918 от 16 октября 2012 года Государственной Службы Регулирования и Надзора за финансовым рынком&nbsp; при Правительстве Кыргызской Республики.</p>
                            <p>&nbsp;</p>
                            <p><strong>Объект страхования</strong></p>
                            <p>Имущественный интерес Страхователя, связанный с повреждением, порчей, утратой и/или уничтожением груза при перевозке любым транспортным средством.</p>
                            <p>&nbsp;</p>
                            <p><strong>Страховой случай </strong></p>
                            <p>Событие, с наступлением которого Страховщик обязан произвести страховую выплату, в соответствии с договором страхования.</p>
                            <p>&nbsp;</p>
                            <p><em><u>Страхование грузов производится по следующим категориям риска:</u></em></p>
                            <p><em><u>&nbsp;</u></em></p>
                            <p><u>Категория А – «С ответственностью за все риски»</u></p>
                            <p>Страховым случаем является повреждение, порча, утрата и/или уничтожение груза в результате следующих событий:</p>
                            <ul>
                                <li>огня и взрыва</li>
                                <li>крушения и столкновения судов, посадки судна на мель, выброса на берег, затопления или перевертывания (опрокидывания) морского или речного судна (баржи и т.п.)</li>
                                <li>опрокидывания или схода под откос (с рельсов) грузовых машин и железнодорожных вагонов при наземной транспортировке</li>
                                <li>аварии летательных аппаратов</li>
                                <li>столкновения или касания судна или другого транспортного средства с любым другим предметом извне, исключая воду (лед при этом водой не считается)</li>
                                <li>разгрузки судна в порту бедствия</li>
                                <li>умышленного пожертвования грузом в случае общей аварии (во имя спасения) на морском транспорте</li>
                                <li>разгрузки транспортного средства в месте катастрофы</li>
                                <li>течью</li>
                                <li>воздействия морской или речной (озерной) воды на груз</li>
                                <li>выброса (смывания за борт) груза в море в момент катастрофы</li>
                                <li>хищения</li>
                                <li>противоправных действий третьих лиц</li>
                                <li>землетрясения, извержения вулкана или удара молнии</li>
                                <li>погрузки или выгрузки груза с транспортного средства</li>
                                <li>гибели или повреждения груза в результате воздействия других товаров (грузов), перевозимых одновременно</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><u>Категория В – «С ответственностью за частную аварию»</u></p>
                            <p>Страховым случаем является повреждение, порча, утрата и/или уничтожение груза в результате следующих событий:</p>
                            <ul>
                                <li>огня и взрыва</li>
                                <li>крушения и столкновения судов, посадки судна на мель, выброса на берег, затопления или перевертывания (опрокидывания) морского или речного судна (баржи и т.п.)</li>
                                <li>опрокидывания или схода под откос (с рельсов) грузовых машин и железнодорожных вагонов при наземной транспортировке</li>
                                <li>аварии летательных аппаратов</li>
                                <li>столкновения или касания судна или другого транспортного средства с любым другим предметом извне, исключая воду (лед при этом водой не считается)</li>
                                <li>разгрузки судна в порту бедствия</li>
                                <li>умышленного пожертвования грузом в случае общей аварии (во имя спасения) на морском транспорте</li>
                                <li>разгрузки транспортного средства в месте катастрофы</li>
                                <li>воздействия морской или речной (озерной) воды на груз</li>
                                <li>выброса (смывания за борт) груза в море в момент катастрофы</li>
                                <li>землетрясения, извержения вулкана или удара молнии</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><u>Категория С – «Без ответственности за повреждения, кроме случаев крушения (только полная гибель)»</u></p>
                            <p>Страховым случаем является повреждение, порча, утрата и/или уничтожение груза в результате следующих событий:</p>
                            <ul>
                                <li>огня и взрыва</li>
                                <li>крушения и столкновения судов, посадки судна на мель, выброса на берег, затопления или перевертывания (опрокидывания) морского или речного судна (баржи и т.п.)</li>
                                <li>опрокидывания или схода под откос (с рельсов) грузовых машин и железнодорожных вагонов при наземной транспортировке</li>
                                <li>аварии летательных аппаратов</li>
                                <li>столкновения или касания судна или другого транспортного средства с любым другим предметом извне, исключая воду (лед при этом водой не считается)</li>
                                <li>разгрузки судна в порту бедствия</li>
                                <li>умышленного пожертвования грузом в случае общей аварии (во имя спасения) на морском транспорте</li>
                                <li>разгрузки транспортного средства в месте катастрофы</li>
                                <li>землетрясения, извержения вулкана или удара молнии</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong>Страховая сумма</strong></p>
                            <p>Сумма денег, на которую застрахован объект страхования и представляющая собой предельный объем ответственности Страховщика при наступлении страхового случая.</p>
                            <p>&nbsp;</p>
                            <p>Размер страховой суммы определяется на основании сопроводительных документов (инвойса, накладных и т.п.)</p>
                            <p>&nbsp;</p>
                            <p>Страховая сумма может включать в себя:</p>
                            <ul>
                                <li>стоимость груза в соответствии с коммерческим инвойсом (счет-фактурой)</li>
                                <li>провозную плату, определяемую на основе транспортных документов (CMR–накладная, MAWB–накладная, ж/д-накладная, товарно-транспортная накладная, транспортный инвойс, коносамент)</li>
                                <li>стоимость груза, предусмотренная в договоре купли-продажи, не превышающая 10% контрактной стоимости груза</li>
                                <li>другие расходы, связанные с транзитным хранением, охраной груза в пути и другие расходы, подтвержденные документально, но не более 20% от (инвойсовой) стоимости груза</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Страховая премия</strong></p>
                            <p>Сумма денег, которую Страхователь обязан уплатить Страховщику за страхование.</p>
                            <p>&nbsp;</p>
                            <p>Размер страховой премии зависит от стоимости, вида перевозимого груза, вида транспортного средства, способа, маршрута перевозки, количества пунктов перегрузок, перевалок, консолидации и других факторов.</p>
                            <p>&nbsp;</p>
                            <p><strong>Период страхования</strong></p>
                            <p>Ответственность по договору страхования начинается с момента, когда груз взят со склада в пункте отправления для перевозки, продолжается в течение всей перевозки (включая перегрузки и перевалки, а также хранение на складах в пунктах перегрузок и перевалок) и заканчивается в момент выгрузки в пункте назначения.</p>

                        </div>
                    </div>
                </div></div></div>
    </main>

@endsection
