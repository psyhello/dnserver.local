@extends ('layout')

@section('content')

<div class="box">
	<div class="columns">
		<div class="column">Заявка №{{ $issue -> id}}, создана в {{$issue-> created_at}}</div>
		<div class="column">{{$issue ->title}}</div>
		<div class="column">{{$issue ->description}}</div>
	</div>
</div> 
@if($issue->comments->count())
	<div class="box">
		<div class="column">Комментарии</div>
		<ul>
		@foreach($issue->comments as $comment)
		
			<li style="margin: 20px;">
				<div class="box">
					{{ $comment->body }} 
					<form action="/comments/{{ $comment->id }}" method="POST">
						@method('DELETE')
						@csrf 
						<button class="button" type="submit"><i class="fa fa-times" aria-hidden="true"></i>
						</button>
					</form>
				</div>
			</li>
		@endforeach
		</ul>
	</div>
@endif
<div class="box">
	<form action="/issues/{{ $issue->id }}/comments" method="POST">
		@csrf
		<input type="text" class="input" name="body">
		<button class="button" type="submit">Добавить комментарий</button>
	</form>
</div>
<div class="columns">
	<form action="/issues/{{ $issue->id }}/edit" style="margin-right: 20px;">
		<button class="button">Изменить заявку</button>
	</form>
	<form action="/issues/{{$issue->id}}" method="POST">
		@method('DELETE')
		@csrf
		<button class="button" type="submit">Удалить заявку</button>
	</form>
</div>
@endsection