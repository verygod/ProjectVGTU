@extends('layouts.admin')
@section('content')
<body>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <div class="card">
          <div class="card-header mb-3">
            Add Role
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-md">
                <div class="row">
                  <div class="col-md">
                  {!! Form::open(['route' => 'roles.store']) !!}
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Role name..." name="name">
                      <span class="input-group-addon">
                        <button type="submit" class="btn btn-neutral btn-sm now-ui-icons ui-1_simple-add">
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mt-3 text-muted mx-auto">
                    <h6 class="text-center mb-3">Assign Permission to Roles</h6>
                  @foreach ($permissions as $permission)
                    <div class="checkbox">
                      <input id="{{$permission->id}}" type="checkbox" name="permissions[]" value="{{$permission->id}}">
                      <label for="{{$permission->id}}">{{$permission->name}}</label>
                    </div>
                  @endforeach
                </div>
                </div>
                <div class="row">
                  <div class="col-md">
                  {!! Form::close() !!}
                </div>
              </div>
            </div>

              <div class="col-md">
                <ul class="list-group">
                  @foreach ($roles as $role)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>{{ $role->name }}</strong>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                    <span>
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