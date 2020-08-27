@extends('backendtemplate')

@section('content')
	<div class="container-fluid w-100 h-100">
	<h2 class="my-3">Hotel Detail</h2>
	<div class="row my-2">
		<div class="offset-2 col-lg-8">
			<img src="{{ asset($hotel->photo)}}" class="img-fluid w-75">
			<p>Hotel Name:{{$hotel->name}}</p>
			<p>Hotel Price:{{$hotel->price}}MMk</p>
		</div>
		</div>
	</div>
@endsection