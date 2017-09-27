@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<ul class="list-group">
				@foreach ($tasks as $task)
					<li class="list-group-item">
						{{$task->body}}
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection