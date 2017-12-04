@extends('layouts.admin')
@section('content')
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-header mb-3">
            Permissions
          </div>
          
          <div class="card-body">
            <div class="row">
              <div class="col-md">
                {!! Form::open(['route' => 'permissions.store', 'method' => 'post', 'class' => 'form-group']) !!}
                <div class="row">
                  <div class="col-md">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Permission name..." name="name">
                      <span class="input-group-addon">
                        <button type="submit" class="btn btn-neutral btn-sm now-ui-icons ui-1_simple-add">
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md mt-3 text-muted">
                    <h6 class="text-center">Assign Permission to Roles</h6>
                    <div class="row">
                      <div class="col-md-6 mt-3 text-muted mx-auto">
                        @if(!$roles->isEmpty())
                        @foreach ($roles as $role)
                        <div class="checkbox">
                          <input id="{{$role->id}}" type="checkbox" name="permissions[]" value="{{$role->id}}">
                        <label for="{{$role->id}}">{{$role->name}}</label>
                        </div>
                        @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <ul class="list-group">
                  @foreach ($permissions as $permission)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>{{ $permission->name }}</strong>
                    <span class="">
                      <a href="{{ route('permissions.edit', $permission->id) }}" class="fa fa-edit"></a>
                      <em class="ml-3"></em>
                      <a href="{{ route('permissions_destroy', $permission->id) }}" class="fa fa-trash"></a>
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