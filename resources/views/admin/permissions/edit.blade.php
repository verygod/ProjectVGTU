@extends('layouts.app')

@section('content')


<body>
	
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">Edit Permission</div>
					<div class="card-body">
						{{ Form::model($permission, array('route' => array('permissions.update', $permission->id),
						'method' => 'PUT', 'class' => 'form-group')) }}

						{{ Form::text('name', null, array('class' => 'form-control')) }}

						{{ Form::submit('Update', array('class' => 'btn btn-primary mt-4')) }}
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

@endsection