@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Администрирование комментариев</h1>

    <table class="table container bg-dark text-white">
        <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Article</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            <th scope="col">Accept?</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <th scope="row">{{$comment->created_at}}</th>
                <td><a href="/article/show/{{$comment->article_id}}">{{App\Models\Article::where('id', $comment->article_id)->value('name')}}</a></td>
                <td>{{$comment->title}}</td>
                <td>{{$comment->text}}</td>
                <td><a class="btn bg-dark text-white" href="/comment/{{$comment->id}}/accept">Принять</a>
                    <a class="btn bg-dark text-white" href="/comment/{{$comment->id}}/reject">Отклонить</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$comments->links()}}
@endsection

@section('theme')
    Администрирование комментариев
@endsection
