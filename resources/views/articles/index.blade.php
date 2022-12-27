@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Главная сраница</h1>

    <table class="table">
        <thead>
        <tr class="text-white">
            <th scope="col">Date</th>
            <th scope="col">Title</th>
            <th scope="col">ShortDesc</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="text-white">
                <th scope="row">{{$article->date}}</th>
                <td>{{$article->name}}</td>
                <td>{{$article->shortDesc}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('theme')
    Новости
@endsection