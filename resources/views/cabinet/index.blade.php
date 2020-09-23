@extends('layouts.app')

@section('content')

    <main class="py-4 container" id="app">

        <div class="row">
            <div class="col-12">
                <table class="table table-sm" style="border-radius: 4px">
                    <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Данные</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Дата</th>
                    </tr>
                    </thead>
                    <tbody>



                <?php foreach ($model as $m): ?>
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->type}}</td>
                    <td>{{$m->status}}</td>
                    <td style="width: 500px">
                        <?php
                       echo $m->data;
                        ?>

                    </td>
                    <td>{{$m->phone}}</td>
                    <td>{{$m->sum}}</td>
                    <td>{{$m->created_at}}</td>

                </tr>
                <?php endforeach; ?>

                    </tbody>
                </table>
                <?php echo $model->render(); ?>
            </div>
        </div>

    </main>

@endsection
