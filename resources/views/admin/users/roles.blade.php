@extends('layouts.app')

@section('content')


<body>


<div class="container">
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Add Role
        </div>

        <div class="card-body">
          {{ Form::open(array('url' => 'roles', 'class' => 'form-group')) }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}

          @foreach ($permissions as $permission)
              {{ Form::checkbox('permissions[]',  $permission->id ) }}
              {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
          @endforeach


        </div>

        <div class="card-footer">
         {{ Form::submit('Pridėti', array('class' => 'btn btn-danger')) }}
         {{ Form::close() }}
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Existing Roles
        </div>

        <div class="card-body">
          <ul>
          @foreach ($roles as $role)
            <li>{{ $role->name }} | <a href="{!! route('role_destroy', $role->id) !!}" class="fa fa-trash"></a></li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


  </div>
</div>
</body>


@endsection
