@extends('backendtemplate')

@section('content')
	<div class="container-fluid w-100 h-100">
	<h2 class="my-3">Car Detail</h2>
	<div class="row my-2">
		<div class="offset-2 col-lg-8">
			<p><img src="{{ asset($car->photo)}}" class="img-fluid w-75">

			<p>Car Name:{{$car->name}}</p>
			<p>Car Price:{{$car->price}}MMk</p>
		</div>
		</div>
	</div>
@endsection