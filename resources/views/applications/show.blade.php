@extends('layouts.app')

@section('content')

<div>

    <h1>{{$application->title}}</h1>

    <img src="{{ Storage::get('public/image/application/1501927005_20170805_092027.jpg')}}" alt="">

    <p>{{$application->details}}</p>
    
</div>   



@endsection