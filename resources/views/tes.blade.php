@extends('home')

@section('content')
    <div class="card-body">
        <div class="row">

        </div>
        <h3>{{ GoogleTranslate::trans($contoh, app()->getLocale()) }}</h3>
        <h3>{{ GoogleTranslate::trans('are you ok', app()->getLocale()) }}</h3>
    </div>
@endsection
