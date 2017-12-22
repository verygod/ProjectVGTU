@extends('layouts.admin')
@section('content')
<body style="background-image:url(../assets/img/login.jpg);" >
<div class="section-tabs mt-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md ml-auto mr-auto">
				<p class="category"></p>
				<div class="card">
					<ul class="nav nav-tabs nav-tabs-neutral justify-content-left" role="tablist" data-background-color="black">
						<li class="nav-item">
							<a class="btn btn-default" data-toggle="tab" href="#home" role="tab">
								<i class="now-ui-icons objects_umbrella-13"></i> Image
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-default" data-toggle="tab" href="#profile" role="tab">
								<i class="now-ui-icons shopping_cart-simple"></i> Text
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-default" data-toggle="tab" href="#messages" role="tab">
								<i class="now-ui-icons shopping_shop"></i> Sound
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-default" data-toggle="tab" href="#settings" role="tab">
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
                <div class="tab-content gallery">
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="row collections">
                                <div class="col-md-3">
                                    <img src="../assets/img/bg1.jpg" alt="" class="img-raised mt-3">
                                    <img src="../assets/img/bg3.jpg" alt="" class="img-raised mt-3">
                                </div>
                                <div class="col-md-3 ">
                                    <img src="../assets/img/bg8.jpg" alt="" class="img-raised mt-3">
                                    <img src="../assets/img/bg7.jpg" alt="" class="img-raised mt-3">
                                </div>
                                <div class="col-md-3 ">
                                    <img src="../assets/img/bg8.jpg" alt="" class="img-raised mt-3">
                                    <img src="../assets/img/bg7.jpg" alt="" class="img-raised mt-3">
                                </div>
                                <div class="col-md-3 ">
                                    <img src="../assets/img/bg8.jpg" alt="" class="img-raised mt-3">
                                    <img src="../assets/img/bg7.jpg" alt="" class="img-raised mt-3">
                                </div>
                            </div>
                    </div>
                  </div>
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
