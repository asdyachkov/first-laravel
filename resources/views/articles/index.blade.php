@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Главная сраница</h1>

    <table class="table container bg-dark text-white">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Title</th>
            <th scope="col">ShortDesc</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->date}}</th>
                <td><a href="/article/show/{{$article->id}}">{{$article->name}}</a></td>
                <td>{{$article->shortDesc}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$articles->links()}}
@endsection

@section('theme')
    Новости
@endsection
