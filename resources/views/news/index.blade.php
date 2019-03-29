@extends ('layout')

@section('content')

<h1 class="title">Новости службы</h1>
<div class="field"><a href="/posts/create">Добавить новость</a></div>

<div class="column">
        @foreach($posts as $post)
            
            <div class="box">
                    <div class="container">
                        <div class="notification">
                            <div class="title">{{$post ->title}}</div>
                            <div class="subtitle">{{$post ->preview}}</div>
                            <div class="content">Новость №{{ $post -> id}}, создана в {{$post-> created_at}}</div>
                        </div>
                    </div>
            </div>
            @endforeach
    </div>


@endsection