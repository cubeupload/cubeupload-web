@extends('app')

@section('content')
	
	<div class="container">

	<h1>My Images <small><em>all your content in one place</em></small></h1>

	<div class="row" style="display:flex; flex-wrap: wrap;">

	@foreach( $images as $img )
		<div class="col-xs-4 col-md-2 col-lg-2 cube-imgthumb">
			<div class="thumbnail">
				<img src="{{ $img->getPublicUrl() }}" alt="{{ $img->name }}"></img>
				<div class="caption hidden">
					<button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-share"></i></button>
				</div>
			</div>
		</div>
	@endforeach

	</div>

	</div>

@stop