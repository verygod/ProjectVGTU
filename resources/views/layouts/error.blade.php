@if (count($errors) > 0)

<div class="alert alert-warning alert-dismissible fade show col-md-4 mt-4 mx-auto" role="alert">
	@foreach ($errors->all() as $error)
  		<strong>{{ $error }}</strong>
	@endforeach
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
