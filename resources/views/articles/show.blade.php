@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Запись</h1>

    <div class="container bg-dark card text-white" style="margin-top: 30px">
        <div class="card-body">
            <h5 class="card-title">{{$article->name}} ({{$article->date}})</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$article->shortDesc}}</h6>
            <p class="card-text">{{$article->desc}}</p>
            <a href="/article/{{$article->id}}/edit" class="btn btn-info">Редактирование</a>
            <a href="/article/{{$article->id}}/delete" class="btn btn-warning">Удаление</a>
        </div>

        <h3 class="text-center">Комментарии</h3>
        @foreach($comments as $comment)
            <div class="card-body">
                <h5 class="card-title">{{$comment->title}} ({{$comment->created_at}})</h5>
                <p class="card-text">{{$comment->text}}</p>
                <a href="/article/{{$article->id}}/edit" class="btn btn-secondary">Редактирование</a>
                <a href="/article/{{$article->id}}/delete" class="btn btn-secondary">Удаление</a>
            </div>
        @endforeach
    </div>

    @if($errors->any())
        <div class="bg-dark alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-white">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/comment" method="post" class="container bg-dark text-white">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Текст</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="text">
        </div>
        <input type="hidden" name="id" value="{{$article->id}}">
        <button type="submit" class="btn btn-primary">Добавить новый комментарий</button>
    </form>
@endsection

@section('theme')
    Запись
@endsection
