@extends('layouts.admin')

@section('content')


<body>


<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card">
        <div class="card-header">Redaguoti vartotoją</div> 

        <div class="card-body col-md-8 mx-auto">
{{--             {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-group')) }} --}}
            <div class="row mt-3">
                    <div class="photo-container">
                        <img src="../../assets/img/ryan.jpg" alt="">
                    </div>

              <div class="col-md-12 mt-3">
                {{ Form::text('profile_image', null, array('class' => 'form-control', 'placeholder' => 'Profilio nuotrauka')) }}
              </div>

            </div>

            <div class="row mt-3">
              
              <div class="col-md-6">
                {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
              </div>
              <div class="col-md-6">
                {{ Form::text('surname', null, array('class' => 'form-control', 'placeholder' => 'Surname')) }}
              </div>

            </div>

            <div class="row mt-3">
              
              <div class="col-md-6">
                {{ Form::text('university', null, array('class' => 'form-control', 'placeholder' => 'University...')) }}
              </div>
              <div class="col-md-6">
                {{ Form::text('faculty', null, array('class' => 'form-control', 'placeholder' => 'Faculty...')) }}
              </div>

            </div>

            <div class="row mt-3">
              
              <div class="col-md-6">
                {{ Form::text('city', null, array('class' => 'form-control', 'placeholder' => 'City...')) }}
              </div>
              <div class="col-md-6">
                {{ Form::text('address', null, array('class' => 'form-control', 'placeholder' => 'Address...')) }}
              </div>

            </div>

            <div class="row mt-3">
              
              <div class="col-md-4">
                {{ Form::text('twitter', null, array('class' => 'form-control', 'placeholder' => 'Twitter Link...')) }}
              </div>
              <div class="col-md-4">
                {{ Form::text('facebook', null, array('class' => 'form-control', 'placeholder' => 'Facebook Link...')) }}
              </div>
              <div class="col-md-4">
                {{ Form::text('instagram', null, array('class' => 'form-control', 'placeholder' => 'Instagram Link...')) }}
              </div>

            </div>

            <div class="row mt-3">
              
              <div class="col-md-8 mx-auto">
                <hr>
                {{ Form::textarea('facebook', null, array('class' => 'form-control', 'placeholder' => 'About me...')) }}
              </div>


            </div>

  
{{--             {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>

</body>


@endsection
