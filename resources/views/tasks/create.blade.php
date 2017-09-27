@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Create a new task?</div>
					<div class="panel-body">
						<form method="POST" action="/tasks">
							{{ csrf_field() }}
							<div class="form-group">
								<input name="body" id="body" class="form-control" rows="8" required>{{ old('body') }}</input>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection