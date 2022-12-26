@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Контакты</h1>

    <div class="container">
        <p class="text-center">
            <b>Наше название:</b> {{$contacts['name']}}
        </p>
        <p class="text-center">
            <b>Наш адрес:</b> {{$contacts['adres']}}
        </p>
        <p class="text-center">
            <b>Наш номер телефона:</b> {{$contacts['phone']}}
        </p>
        <p class="text-center">
            <b>Наш email:</b> {{$contacts['email']}}
        </p>
    </div>


@endsection

@section('theme')
    Контакты
@endsection
