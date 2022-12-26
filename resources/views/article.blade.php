@extends('template/base')

@section('content')
    <h1 class="text-center text-muted my-4 pt-4">Новость из БД</h1>
    <div class="container my-5 pt-4">
        <div class="row g-5">
            <div class="card">
                <img src="/{{$articles['preview_image']}}" class="card-img-top" alt="{{$articles['preview_image']}}">
                <div class="card-body text-dark">
                    <h4 class="card-title">{{$articles['name']}}</h4>
                    @if(!empty($articles['desc']))
                        <h5 class="card-text">{{$articles['desc']}}</h5>
                    @endif
                    <h4 class="card-title">{{$articles['date']}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('theme')
    Новость из БД
@endsection
