@extends ('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Личный кабинет</div>

                <div class="card-body">
                    Заявки:
                    @foreach ($issues as $issue)
                    <div class="columns">
                        <div class="column">{{ $issue->id }}</div>
                        <div class="column">{{ $issue->title }}</div>
                        <div class="column">{{ $issue->description }}</div>
                        <div class="column">{{ $issue->created_at }}</div>
                        <div class="column"><a href="/issues/{{ $issue->id}}">>></a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
