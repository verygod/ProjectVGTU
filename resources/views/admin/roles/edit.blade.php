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
							<div class="col-md-6 mx-auto">
								{{ Form::text('name', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="row ">
							<div class="col-md-6 mt-3 text-muted mx-auto">
								@foreach ($permissions as $permission)
								<div class="checkbox">
									<input id="{{$permission->id}}" 
											type="checkbox" 
											name="permissions[]"
											value="{{$permission->id}}">

									<label for="{{$permission->id}}">{{$permission->name}}</label>
								</div>
								@endforeach
							</div>
						</div>
						
					</div>
					<div class="row mb-4">
						<div class="col-md-6 mx-auto">
							{{ Form::submit('Update', array('class' => 'btn btn-primary', 'style' => 'width: 100%')) }}
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection