@extends ('layout')

@section('content')


<form action="/posts" method="POST">
	@csrf
	<div class="field">
		<div class="control">
			<input type="text" class="input" name="title" id="" placeholder="Введите название" value="{{ old('title') }}">
		</div>
		<div class="control">
			<textarea name="preview" id="" cols="30" rows="10" class="textarea" placeholder="Введите короткую версию новости" ></textarea>
		</div>
		<div class="control">
			<textarea name="full_text" id="" cols="30" rows="10" class="textarea" placeholder="Введите полную версию новости" ></textarea>
		</div>
		<button class="button" type="submit">Создать новость</button>
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