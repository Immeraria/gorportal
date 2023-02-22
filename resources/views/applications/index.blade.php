@extends('layouts.app')

@section('content')

<table class="table table-borderless">

    <thead>
        <tr>
            <th class="py-4" scope="col">#</th>
            <th class="py-4" scope="col">ФИО</th>
            <th class="py-4" scope="col">Описание проблемы</th>

        </tr>
    </thead>

    <tbody>
        @foreach($applications as $application)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>

            </td>
            <td>{{$application->title}}</td>
            <th scope="col"><a href="/applications/{{$application->id }}"><button type="button" class="btn btn-info active">Подробнее</button></a></th>
            <th scope="col"><button type="button" class="btn btn-success active">Решено</button></th>
            <th scope="col"><button type="button" class="btn btn-danger active">Удалить</button></th>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection