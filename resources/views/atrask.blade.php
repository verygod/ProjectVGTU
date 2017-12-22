@extends('layouts.admin')
@section('content')
<body>
	<div class="section-tabs mt-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
					<ul class="nav nav-tabs nav-tabs-primary justify-content-left" role="tablist" data-background-color="black">
						<li class="nav-item">
							<a class="btn btn-link" data-toggle="tab" href="#main" id="mainone" role="tab">Visi darbai</a>
						</li>
						@foreach($x as $category)
						<li class="nav-item">
							<a class="btn btn-link" data-toggle="tab" href="#{{$category->name}}" id="{{$category->id}}" role="tab">{{$category->name}}</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md ml-auto mr-auto">
					<p class="category"></p>
					<div class="tab-content">
						<div class="tab-pane" id="main" role="tabpanel">
							Main
						</div>
						@foreach($x as $category)
						<div class="tab-pane" id="{{$category->name}}" role="tabpanel">
							<div class="tab-content gallery">
								<div class="col-md-12 ml-auto mr-auto">
									<div class="row collections">
										@foreach($u as $upload)
										<div class="col-md-3">
											<img src="{{$upload->url}}" alt="{{$upload->name}}" class="img-raised mt-3">
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection