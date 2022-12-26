@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Новости</h1>
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            @foreach($list as $item)
            <div class="col">
                <div class="card">
                    <img src="{{$item['preview_image']}}" class="card-img-top" alt="...">
                    <div class="card-body text-dark">
                        <h5 class="card-title">{{$item['name']}}</h5>
                        @if(!empty($item['shortDesc']))
                            <p class="card-text">{{$item['shortDesc']}}</p>
                        @endif
                        <a href="/post/{{$item['id']}}" class="btn btn-primary">Читать полностью</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('theme')
    Новости
@endsection
