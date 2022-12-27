@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Редактирование комментария</h1>

    <form action="/comment/{{$comment->id}}" method="post" class="container bg-dark text-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$comment->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Текст</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="text" value="{{$comment->text}}">
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection

@section('theme')
    Редактирование комментария
@endsection
