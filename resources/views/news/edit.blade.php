@extends ('layout')

@section('content')

<form action="/posts/{{$post->id}}" method="POST">
	@method('PATCH')
	@csrf
	<div class="field">
		<div class="control">
			<input type="text" class="input" name="title" id="" placeholder="Введите название" value="{{$post->title}}">
		</div>
		<div class="control">
			<textarea name="preview" id="" cols="30" rows="10" class="textarea" placeholder="Введите краткую версию новости">{{$post->preview}}</textarea>
		</div>
		<div class="control">
			<textarea name="full_text" id="" cols="30" rows="10" class="textarea" placeholder="Введите полную версию новости">{{$post->full_text}}</textarea>
		</div>
		<button class="button" type="submit">Изменить новость</button>

	</div>
<form action="/posts/{{$post->id}}" method="POST">
		@method('DELETE')
		@csrf
		<button class="button" type="submit">Удалить новость</button>
</form>

@endsection