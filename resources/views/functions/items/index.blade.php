@extends('layouts.user')
@section('content')
<body style="background-image:url(../assets/img/login.jpg);" >
<div class="section-tabs" style="margin-top: 10rem;">
	<div class="container">
		<div class="row">
			<div class="col-md col-lg-10 col-xl-8 ml-auto mr-auto">
				<p class="category">Upload your story...</p>
				<div class="card">
					<ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
								<i class="now-ui-icons objects_umbrella-13"></i> Image
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
								<i class="now-ui-icons shopping_cart-simple"></i> Text
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#messages" role="tab">
								<i class="now-ui-icons shopping_shop"></i> Sound
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#settings" role="tab">
								<i class="now-ui-icons ui-2_settings-90"></i> Video
							</a>
						</li>
					</ul>
					<div class="card-body">
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-panel" id="home" role="tabpanel">

							</div>
							<div class="tab-pane" id="profile" role="tabpanel">
								<p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. 
								</p>
							</div>
							<div class="tab-pane" id="messages" role="tabpanel">
								<p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
							</div>
							<div class="tab-pane" id="settings" role="tabpanel">
								<p>
									"I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection