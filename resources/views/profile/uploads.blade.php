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
	/*a*/
}
@media screen and (max-width: 750px) {
#columns { column-gap: 0px; }
#columns figure { width: 100%; }
}
</style>
<body>
	<div class="section-tabs mt-2">
		<div class="row" >
			<div class="col-md ml-auto mr-auto" id="columns">
				@foreach($artist as $upload)
				<figure>
					<img src="../{{$upload->url}}">
					<figcaption>
					{{$upload->name}}
					<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delUpload{{$upload->id}}" >Trinti</a>
					</figcaption>
				</figure>
				@endforeach
			</div>
		</div>
	</div>
	@foreach($artist as $upload)
	<div class="modal fade" id="delUpload{{$upload->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Ar tikrai norite trinti? Atstatyti šio žingsnio negalėsite.</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Ne</button>
					<a class="btn btn-danger" href="{{ route('upload_destroy', $upload->id) }}">Trinti</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	@endsection