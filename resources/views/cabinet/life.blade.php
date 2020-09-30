@extends('layouts.app')

@section('content')

    <main class="py-4 container" id="app">

        <div class="row">
            <div class="col-12">
                <table class="table table-sm" style="border-radius: 4px">
                    <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Продукт</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Документ</th>
                    </tr>
                    </thead>
                    <tbody>



                <?php foreach ($model as $m): ?>
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    <td>{{$m->firstName}}</td>
                    <td>{{$m->MidleName}}</td>
                    <td>
                        <?php
                       echo $m->product;
                        ?>

                    </td>
                    <td>{{$m->polis}}</td>
                    <td>{{$m->telephone}}</td>
                    <td><a href="{{route('cabinet.document', ['id'=>$m->id])}}">Документ</a></td>
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
