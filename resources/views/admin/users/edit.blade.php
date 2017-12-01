@extends('layouts.app')

@section('content')


<body>


<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card">
        <div class="card-header">Redaguoti vartotoją</div> 

        <div class="card-body">
            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-group')) }}

            <div class="row">
              
              <div class="col-md-6">
                {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>
              <div class="col-md-6">
                {{ Form::email('email', null, array('class' => 'form-control')) }}
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4 mt-4">
                <h4>Roles</h4>
                @foreach ($roles as $role)
                  {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                  {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                @endforeach              
              </div>
            </div>

  
            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>

</body>


@endsection
