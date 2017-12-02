@extends('layouts.app')

@section('content')


<body>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
        <div class="card-header text-white bg-success mb-3">
          Add Categories
        </div>

        
        <div class="card-body">
        <div class="row">
        <div class="col-md-6">
       
        {!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
        {!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
        {!! Form::close() !!}
          
        </div>


        <div class="col-md-6">
          <ul class="list-group">
            @foreach ($categories as $category)
              <li class="list-group-item d-flex justify-content-between align-items-center">
               <strong>{{ $category->name }}</strong> 
              <span class="">
                <a href="{{ route('categories.edit', $category->id) }}" class="fa fa-edit"></a>
                <em class="ml-3"></em>
                <a href="{{ route('categories_destroy', $category->id) }}" class="fa fa-trash"></a>
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