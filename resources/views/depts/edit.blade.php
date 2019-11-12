@extends ('layout')

@section('content')

<form action="/issues/{{$issue->id}}" method="POST">
	@method('PATCH')
	@csrf
	<div class="field">
		<div class="control">
			<input type="text" class="input" name="title" id="" placeholder="Введите название" value="{{$issue->title}}">
		</div>
		<div class="control">
			<textarea name="description" id="" cols="30" rows="10" class="textarea" placeholder="Введите описание проблемы">{{$issue->description}}</textarea>
		</div>
		<button class="button" type="submit">Изменить заявку</button>
	</div>
	

@endsection