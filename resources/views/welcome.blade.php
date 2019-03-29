@extends ('layout')

@section('content')
<div class="columns">
    <div class="column">Меню</div>
    <div class="column">
        @foreach($posts as $post)
            
            <div class="box">
                    <div class="container">
                        <div class="notification">
                            <div class="title">{{$post ->title}}</div>
                            <div class="subtitle">{{$post ->full_text}}</div>
                            <div class="content">Новость №{{ $post -> id}}, создана в {{$post-> created_at}}</div>
                        </div>
                    </div>
            </div>
            @endforeach
    </div>
           
    <div class="column">Личный кабинет</div>
    </div>


@endsection