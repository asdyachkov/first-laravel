@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Главная сраница</h1>

    <table class="table container bg-dark text-white">
        <thead>
        <tr class="text-white">
            <th scope="col">Дата</th>
            <th scope="col">Тема</th>
            <th scope="col">Описание</th>
            <th scope="col">Изображение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="text-white">
                <th scope="row">{{$article['date']}}</th>
                <td>{{$article['name']}}</td>
                <td>{{$article['desc']}}</td>
                <td><a href="/galery/{{$article['full_image']}}"><img src="{{URL::asset($article['preview_image'])}}" alt="" height="100" width="100"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('theme')
    Главная страница
@endsection
