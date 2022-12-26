@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Новости из БД</h1>

    <div class="container my-5 pt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            @foreach($articles as $article)
                <div class="col">
                    <div class="card">
                        <img src="{{$article['preview_image']}}" class="card-img-top" alt="...">
                        <div class="card-body text-dark">
                            <h5 class="card-title">{{$article['name']}}</h5>
                            @if(!empty($article['shortDesc']))
                                <p class="card-text">{{$article['shortDesc']}}</p>
                            @endif
                            <a href="/articles/{{$article['id']}}" class="btn btn-primary">Читать полностью</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('theme')
    Новости из БД
@endsection
