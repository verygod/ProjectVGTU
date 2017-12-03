@extends('layouts.admin')
@section('content')
<body>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <div class="card">
          <div class="card-header text-white bg-success mb-3">
            Add Role
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-md">
                <div class="row">
                  {!! Form::open(['route' => 'roles.store']) !!}
                  {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'role name')) !!}
                </div>
                <div class="row">
                  @foreach ($permissions as $permission)
                  {!! Form::checkbox('permissions[]',  $permission->id ) !!}
                  {!! Form::label($permission->name, ucfirst($permission->name)) !!}
                  @endforeach
                </div>
                <div class="row">
                  {!! Form::submit('Add!', array('class' => 'btn btn-success')) !!}
                  {!! Form::close() !!}
                </div>
              </div>

              <div class="col-md">
                <ul class="list-group">
                  @foreach ($roles as $role)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>{{ $role->name }}</strong>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                    <span class="">
                      <a href="{{ route('roles.edit', $role->id) }}" class="fa fa-edit"></a>
                      <em class="ml-3"></em>
                      <a href="{{ route('role_destroy', $role->id) }}" class="fa fa-trash"></a>
                    </span>
                  </li>
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