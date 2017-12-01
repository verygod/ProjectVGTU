@extends('layouts.app')

@section('content')


<body>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header">Create User</div>
        <div class="card-body">
          
       {{ Form::open(['route' => 'users.create', 'method' => 'post', 'class' => 'form-group']) }}


          <div class="row">
            <div class="col-md-6">
              {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'name')) }}
            </div>
            <div class="col-md-6">
              {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'email')) }}
            </div>
          </div>
            
          <div class="row">
            <div class="col-md-6 mt-3">
              {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password')) }}
            </div>
            <div class="col-md-6 mt-3">
              {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'password x2')) }}
            </div>
          </div>  
          <div class="row mt-3">
            <div class="col-md-5 mx-auto ">
              <div class="card">
                {{-- <div class="card-header">Add Role</div> --}}

                <div class="card-body text-justified">
                  @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12 text-center">
              {{ Form::submit('Create', array('class' => 'btn btn-secondary')) }}
              {{ Form::close() }}     
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>


@endsection
