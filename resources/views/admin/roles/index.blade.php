@extends('layouts.app')

@section('content')


<body>


<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
        <div class="card-header text-white bg-success mb-3">
          Add Role
        </div>

        <div class="card-body">

        <div class="row">
        <div class="col-md-6">
            <div class="card mt-2">
              {!! Form::open(['route' => 'roles.store']) !!}
              <div class="card-header form-inline">
                {!! Form::text('name', '', array('class' => 'form-control mr-sm-2', 'placeholder' => 'role name')) !!}
                {!! Form::submit('Add!', array('class' => 'btn btn-success  my-2 my-sm-0 mt-2')) !!}
              </div>
              <div class="card-body">
                @foreach ($permissions as $permission)
                  {!! Form::checkbox('permissions[]',  $permission->id ) !!}
                  {!! Form::label($permission->name, ucfirst($permission->name)) !!}<br>
                @endforeach             
              </div>
            </div>

          
          {!! Form::close() !!}
        </div>

        <div class="col-md-6">
          <ul class="list-group">
            @foreach ($roles as $role)
              <li class="list-group-item d-flex justify-content-between align-items-center">
               <strong>{{ $role->name }}</strong> 
                <small class="text-muted">Donec id elit non mi porta.</small>
              <span class="">
                <a href="{{ route('roles.edit', $role->id) }}" class="fa fa-edit"></em>
                <em class="ml-3"></em>
                <a href="{{ route('role_destroy', $role->id) }}" class="fa fa-trash"></a>
              </span>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

        <div class="row">

        </div>

    </div>
  </div>
</div>


  </div>
</div>
</body>




@endsection
