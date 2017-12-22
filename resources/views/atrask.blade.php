@extends('layouts.admin')
@section('content')
<style type="text/css">
	#columns {
column-width: 320px;
column-gap: 15px;
width: 90%;
max-width: 1100px;
margin: 50px auto;
}
div#columns figure {
background: #fefefe;
border: 2px solid #fcfcfc;
box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
margin: 0 2px 15px;
padding: 15px;
padding-bottom: 10px;
/*transition: opacity .4s ease-in-out;*/
display: inline-block;
column-break-inside: avoid;
}
div#columns figure img {
width: 100%; height: auto;
border-bottom: 1px solid #ccc;
padding-bottom: 15px;
margin-bottom: 5px;
}
div#columns figure figcaption {
font-size: .9rem;
color: #444;
line-height: 1.5;
}
div#columns small {
font-size: 1rem;
float: right;
text-transform: uppercase;
color: #aaa;
}
div#columns small a {
color: #666;
text-decoration: none;
transition: .4s color;
}
div#columns:hover figure:not(:hover) {
/*opacity: 0.4;*/
}

@media screen and (max-width: 750px) {
#columns { column-gap: 0px; }
#columns figure { width: 100%; }
}
</style>
<body>
	<div class="section-tabs mt-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
					<ul class="nav nav-tabs bg-white justify-content-center" role="tablist" data-background-color="black">
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
						<div class="tab-pane" id="main" role="tabpanel">Main</div>
						@foreach($x as $category)
						<div class="tab-pane" id="{{$category->name}}" role="tabpanel">
							<div class="tab-content">
								<div id="columns">
									@foreach($u as $upload)
									<figure>
										<a href="{{ url('profile', $upload->artist_ID) }}">
										<img src="{{$upload->url}}">
										<figcaption>{{$upload->name}}</figcaption>
									</a>
									</figure>
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
	@endsection