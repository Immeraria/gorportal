@extends('layouts.app')



@section('content')


<div class="bg-white">

    <div class="container">

        <h1 class="py-3">Создание заявки</h1>

        <div class="card-body">
            <form method="POST" action="{{ route('applications.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Краткое описание') }}</label>

                    <div class="col-md-6">

                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">

                    <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Детальное описание') }}</label>

                    <div class="col-md-6 form-floating">
                        <textarea class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" id="textarea" style="height: 100px"></textarea>
                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <input class="@error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ old('image') }}"  multiple >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Создать') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection
