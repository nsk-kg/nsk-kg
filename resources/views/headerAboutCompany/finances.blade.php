@extends('layouts.app')

@section('content')

    <div class="py-4 container" id="app">
        <h1 class="display-sm-4">Финансовые показатели</h1>
        <div class="table-responsive">
            <table class="mt-5 fin-table table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="fin-table table-header">
                        <p>Финансовые показатели</p>
                    </th>
                    <th class="fin-table table-header">
                        <p>За 2017 г.</p>
                    </th>
                    <th class="fin-table table-header">
                        <p>За 2018 г.</p>
                    </th>
                    <th class="fin-table table-header">
                        <p>За 2019 г.</p>
                    </th>
                    <th class="fin-table table-header">
                        <p>За 2020 г.</p>
                    </th>
                    <th class="fin-table table-header">
                        <p>За 2021 г.</p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>
                        <p>Собственный капитал:</p>
                    </th>
                    <td>
                        <p>167 484 563</p>
                    </td>
                    <td>
                        <p>159 352 970</p>
                    </td>
                    <td>
                        <p>169 538 194</p>
                    </td>
                    <td>
                        <p>170 484 436</p>
                    </td>
                    <td>
                        <p>173 142 637</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>Уставный капитал:</p>
                    </th>
                    <td>
                        <p>150 000 050</p>
                    </td>
                    <td>
                        <p>150 000 050</p>
                    </td>
                    <td>
                        <p>150 000 050</p>
                    </td>
                    <td>
                        <p>150 000 050</p>
                    </td>
                    <td>
                        <p>150 000 050</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>Страховые резервы:</p>
                    </th>
                    <td>
                        <p>15 750 028</p>
                    </td>
                    <td>
                        <p>28 853 199</p>
                    </td>
                    <td>
                        <p>30 179 928</p>
                    </td>
                    <td>
                        <p>52 521 513</p>
                    </td>
                    <td>
                        <p>77 608 583</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>Активы:</p>
                    </th>
                    <td>
                        <p>190 243 627</p>
                    </td>
                    <td>
                        <p>206 690 663</p>
                    </td>
                    <td>
                        <p>211 703 629</p>
                    </td>
                    <td>
                        <p>241 662 635</p>
                    </td>
                    <td>
                        <p>210 б19 066</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>Поступления страховых платежей:</p>
                    </th>
                    <td>
                        <p>48 122 519</p>
                    </td>
                    <td>
                        <p>53 475 966</p>
                    </td>
                    <td>
                        <p>55 857 828</p>
                    </td>
                    <td>
                        <p>81 547 966</p>
                    </td>
                    <td>
                        <p>172 646 922</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <p>Выплаты:</p>
                    </th>
                    <td>
                        <p><strong><span >9 050 269</p>
                    </td>
                    <td>
                        <p><strong><span >7 394 392</p>
                    </td>
                    <td>
                        <p><strong><span >15 571 211</p>
                    </td>
                    <td>
                        <p><strong><span >33 225 307</p>
                    </td>
                    <td>
                        <p><strong><span >62 753 045</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
