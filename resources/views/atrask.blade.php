@extends('layouts.admin')
@section('content')
<style type="text/css">
.columns {
	column-width: 320px;
	column-gap: 15px;
  	width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}

.columns figure {
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

.columns figure img {
	width: 100%; height: auto;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

.columns figure figcaption {
  font-size: .9rem;
	color: #444;
  line-height: 1.5;
}

.columns small { 
  font-size: 1rem;
  float: right; 
  text-transform: uppercase;
  color: #aaa;
} 

.columns small a { 
  color: #666; 
  text-decoration: none; 
  transition: .4s color;
}

.columns:hover figure:not(:hover) {
	/*a*/
}

@media screen and (max-width: 750px) { 
  .columns { column-gap: 0px; }
  .columns figure { width: 100%; }
}
</style>
<body>
	<div class="section-tabs mt-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs bg-white justify-content-center">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('find.index') }}">Visi darbai</a>
						</li>
						@foreach($a as $category)
						<li class="nav-item">
							<a class="nav-link" href="{{ route('find.show', $category->id) }}">{{$category->name}}</a>
						</li>
						@endforeach 
					</ul>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-sm-4">
					<div class="input-group ">
						<input type="text" class="form-control" placeholder="Search..." id="search">
						<span class="input-group-addon">
							<i class="now-ui-icons ui-1_zoom-bold"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="row" >
				<div id="searchbox">
				<div class="col-md ml-auto mr-auto columns" id="searchreload">
					@foreach($u as $upload)
					<figure>
						<a href="{{ url('profile', $upload->artist_ID) }}">
							<img src="../{{$upload->url}}">
							<figcaption>{{$upload->name}}</figcaption>
						</a>
					</figure>
					@endforeach
					</div>
				</div>
			</div>

		</div>
	</div>
	

{{-- <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 --}}
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keyup(function(){
      var str = $("#search").val();
        if(str == "") {
          console.log('Search is empty');
           $( "#searchbox" ).load(location.href + " #searchreload");
        } else {
          $.get( "{{ url('/search?id=') }}"+str, function( data ) {
            $( "#searchbox" ).html( data );
          });
        };
    });
  });
</script>
@endsection