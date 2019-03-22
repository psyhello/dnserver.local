@extends ('layout')

@section('content')


<div class="box">
		<div class="container">
			<div class="notification">
				<div class="title">{{$post ->title}}</div>
				<div class="subtitle">{{$post ->full_text}}</div>
				<div class="content">Новость №{{ $post -> id}}, создана в {{$post-> created_at}}</div>
			</div>
		</div>
</div>



<div class="columns">
	<form action="/posts/{{ $post->id }}/edit" style="margin-right: 20px;">
		<button class="button">Изменить Новость</button>
	</form>
	<form action="/posts/{{$post->id}}" method="POST">
		@method('DELETE')
		@csrf
		<button class="button" type="submit">Удалить Новость</button>
	</form>
</div>
@endsection