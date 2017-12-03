@extends('layouts.admin')

@section('content')


<body>
	
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">Edit Roles</div>
					<div class="card-body">
						{{ Form::model($role, array('route' => array('roles.update', $role->id),
						'method' => 'PUT', 'class' => 'form-group')) }}


						<div class="row">
							{{ Form::text('name', null, array('class' => 'form-control')) }}
						</div>
						

          				<div class="row mt-3">
              				<div class="col-md card">
                				<div class="card-body text-justified">
                  				@foreach ($permissions as $permission)
                    			{{ Form::checkbox('permissions[]',  $permission->id ) }}
                    			{{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
                  				@endforeach
                				</div>
              				</div>
          				</div>

						{{ Form::submit('Update', array('class' => 'btn btn-primary mt-4')) }}
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

@endsection