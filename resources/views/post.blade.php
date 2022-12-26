@extends('template/base')

@section('content')
    <div class="container my-5 pt-4">
        <div class="row g-5">
            @foreach($list as $item)
                @if($item['id'] == $id)
                    <div class="card">
                        <img src="/{{$item['preview_image']}}" class="card-img-top" alt="{{$item['preview_image']}}">
                        <div class="card-body text-dark">
                            <h4 class="card-title">{{$item['name']}}</h4>
                            @if(!empty($item['desc']))
                                <h5 class="card-text">{{$item['desc']}}</h5>
                            @endif
                            <h4 class="card-title">{{$item['date']}}</h4>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

@section('theme')
    Главная страница
@endsection
