@extends ('layout')

@section('content')

<h1 class="title">Заявки</h1>
<div class="columns">
	<div class="column">ID заявки</div>
	<div class="column">Заглавие заявки</div>
	<div class="column">Описание проблемы</div>
	<div class="column">Создано</div>
	<div class="column">Просмотр</div>

</div>

@foreach ( $issues as $issue)

<div class="columns">
	<div class="column">{{ $issue->id }}</div>
	<div class="column">{{ $issue->title }}</div>
	<div class="column">{{ $issue->description }}</div>
	<div class="column">{{ $issue->created_at }}</div>
	<div class="column"><a href="/issues/{{ $issue->id}}">>></a></div>
</div>
@endforeach

@endsection