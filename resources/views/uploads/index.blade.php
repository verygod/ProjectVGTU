@extends('layouts.admin')

@section('content')


<body>


<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card">
        <div class="card-header">Įkelti darbą</div> 

        <div class="card-body col-md-8 mx-auto">
            {{ Form::open(['route' => 'upload.store', 'files' => true]) }}
            <div class="row mt-3">
              <div class="col-md-12">
                {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name of the image...')) }}
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-12">
                  <select class="custom-select" name="category" style="width: 100%">
                    <option>-</option>
                @if(!empty($c))
                      @foreach($c as $category)
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                      @endforeach
                    @else
                      Nėra kategorijų
                    @endif
                </select>
              </div>
            </div>    

            <div class="row mt-3">
              <div class="col-md-12">
                <label class="custom-file mx-auto" >
                  <input type="file" id="url" name="url" class="custom-file-input" >
                  <span class="custom-file-control" ></span>
                </label>
              </div>
            </div>
          

          <div class="row mt-3 mx-auto">
            {{ Form::submit('Upload', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>


@endsection
