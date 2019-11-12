@extends ('layout')

@section('content')

<h1 class="title">Отделы</h1>
<div class="columns">
	<div class="column">ID отдела</div>
	<div class="column">Название отдела</div>


</div>

@foreach ( $depts as $dept)

<div class="box">
	<div class="row">{{ $dept->id }}</div>
	<div class="row">{{ $dept->name }}</div>
	<div class="row">{{ $dept->parent_id }}</div>
</div>
@endforeach

@endsection