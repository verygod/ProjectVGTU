@extends('layouts.admin')

@section('content')


<body>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
        <div class="card-header text-white bg-success mb-3">
          Permissions
        </div>

        
        <div class="card-body">
        <div class="row">
        <div class="col-md-6">
       
        {!! Form::open(['route' => 'permissions.store', 'method' => 'post', 'class' => 'form-group']) !!}
        {!! Form::text('name', '', array('class' => 'form-control')) !!}

        <hr>
          @if(!$roles->isEmpty())
            <h6>Assign Permission to Roles</h6>
          @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
          @endforeach
          @endif

          {!! Form::submit('Add', array('class' => 'btn btn-success')) !!}
          {!! Form::close() !!}
          
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
