@extends ('layout')

@section('content')

<h1 class="title">Новости службы</h1>
<div class="field"><a href="/posts/create">Добавить новость</a></div>

@foreach ( $posts as $post)

<div class="box">
	<div class="column">{{ $post->id }}</div>
	<div class="column">{{ $post->title }}</div>
	<div class="column">{{ $post->preview }}</div>
	<div class="column"><a href="/posts/{{ $post->id}}">>></a></div>
</div>
@endforeach

@endsection