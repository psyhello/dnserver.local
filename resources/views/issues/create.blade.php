@extends ('layout')

@section('content')


<form action="/issues" method="POST">
	@csrf
	<div class="field">
		<div class="control">
			<input type="text" class="input" name="title" id="" placeholder="Введите название" value="{{ old('title') }}">
		</div>
		<div class="control">
			<textarea name="description" id="" cols="30" rows="10" class="textarea" placeholder="Введите описание проблемы" ></textarea>
		</div>
		<button class="button" type="submit">Создать заявку</button>
	</div>
</form>
	@if ( $errors->any())
	<div class="notification is-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
@endsection