@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Галерея</h1>

    <div class="text-center">
        <img src="{{URL::asset($full)}}" alt="">
    </div>

@endsection

@section('theme')
    Галерея
@endsection
