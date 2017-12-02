@extends('layouts.app')

@section('content')


<body>
	
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">Edit Category</div>
					<div class="card-body">
						{{ Form::model($categories, array('route' => array('categories.update', $categories->id),
						'method' => 'PUT', 'class' => 'form-group')) }}

						{{ Form::text('name', null, array('class' => 'form-control')) }}
						{{ Form::text('activity', null, array('class' => 'form-control mt-2')) }}

						{{ Form::submit('Update', array('class' => 'btn btn-primary mt-4')) }}
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

@endsection