@extends ('layout')

@section('content')

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
   


@endsection