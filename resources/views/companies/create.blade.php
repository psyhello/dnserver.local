@extends ('layout')

@section('content')


<form action="/depts" method="POST">
	@csrf
	<div class="field">
		<div class="control">
			<input type="text" class="input" name="name" id="" placeholder="Введите название" value="{{ old('title') }}">
		</div>
		<div class="control">
			<textarea name="parent_id" id="" cols="30" rows="10" class="textarea" placeholder="Введите номер отдела" ></textarea>
		</div>
		<button class="button" type="submit">Создать новый отдел</button>
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