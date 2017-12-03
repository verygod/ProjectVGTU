@extends('layouts.admin')
@section('content')
<div class="container">
	<div class="row mt-4">
		<div class="col-md-8 mx-auto">
			<div class="row">
				<div class="col-md">
					<ul class="nav nav-pills text-center" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="pills-text-tab" data-toggle="pill" href="#pills-text" role="tab" aria-controls="pills-text" aria-selected="true">
								<i class="fa fa-file-text" aria-hidden="true"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-iamge" aria-selected="false">
								<i class="fa fa-file-image-o" aria-hidden="true"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">
								<i class="fa fa-file-video-o" aria-hidden="true"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-music-tab" data-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-music" aria-selected="false">
								<i class="fa fa-music" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade" id="pills-text" role="tabpanel" aria-labelledby="pills-text-tab">
							<div class="row">
								<div class="col-md">
									<div class="card">
										<div class="card-header">Add Text</div>
										<div class="card-body">
											{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
											<div class="row">
												<div class="col-md">
													{!! Form::text('name-text', '', array('class' => 'form-control', 'placeholder' => 'Title')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::textarea('text', '', array('class' => 'form-control mt-2', 'placeholder' => 'Your creation...')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
													{!! Form::close() !!}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
							<div class="row">
								<div class="col-md">
									<div class="card">
										<div class="card-header">Add Image</div>
										<div class="card-body">
											{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
											<div class="row">
												<div class="col-md">
													{!! Form::text('name-image', '', array('class' => 'form-control', 'placeholder' => 'Title')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md mx-auto">
													<label class="custom-file mt-2">
														{!! Form::file('image', array('class' => 'custom-file-input', 'placeholder' => 'Image to upload...')) !!}
														<span class="custom-file-control"></span>
													</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
													{!! Form::close() !!}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
							<div class="row">
								<div class="col-md">
									<div class="card">
										<div class="card-header">Add Video</div>
										<div class="card-body">
											{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
											<div class="row">
												<div class="col-md">
													{!! Form::text('name-video', '', array('class' => 'form-control', 'placeholder' => 'Title')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::text('video-link', '', array('class' => 'form-control mt-2', 'placeholder' => 'Youtube video link')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
													{!! Form::close() !!}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-music-tab">
							<div class="row">
								<div class="col-md">
									<div class="card">
										<div class="card-header">Add Video</div>
										<div class="card-body">
											{!! Form::open(['route' => 'categories.store', 'method' => 'post', 'class' => 'form-group']) !!}
											<div class="row">
												<div class="col-md">
													{!! Form::text('name-video', '', array('class' => 'form-control', 'placeholder' => 'Title')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::text('video-link', '', array('class' => 'form-control mt-2', 'placeholder' => 'Soundcloud song link')) !!}
												</div>
											</div>
											<div class="row">
												<div class="col-md">
													{!! Form::submit('Add', array('class' => 'btn btn-success mt-2')) !!}
													{!! Form::close() !!}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection