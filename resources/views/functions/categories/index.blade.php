@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row mt-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add Category</div>
				<div class="card-body">
					{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
        			{!! Form::text('name', '', array('class' => 'form-control')) !!}


				    {!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
          			{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection