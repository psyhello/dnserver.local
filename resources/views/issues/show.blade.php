@extends ('layout')

@section('content')

<div class="field">
	<div class="columns">
		<div class="column">Заявка №{{ $issue -> id}}, создана в {{$issue-> created_at}}</div>
		<div class="column">{{$issue ->title}}</div>
		<div class="column">{{$issue ->description}}</div>


	</div>
	<form action="/issues/{{ $issue->id }}/edit" style="margin-bottom: 20px;"><button class="button">Изменить заявку</button></form>

	<form action="/issues/{{$issue->id}}" method="POST">
		@method('DELETE')
		@csrf
		<button class="button" type="submit">Удалить заявку</button>
	</form>
</div> 


@endsection