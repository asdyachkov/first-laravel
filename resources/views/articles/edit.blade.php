@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Редактирование записи</h1>

    @if($errors->any())
        <div class="container bg-dark alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-white">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/article/{{$article->id}}" method="post" class="container bg-dark text-white">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Дата</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" value="{{$article->date}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Имя статьи</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$article->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Аннотация</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="annotation" value="{{$article->shortDesc}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Описание</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$article->desc}}">
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection

@section('theme')
    Редактирование записи
@endsection
