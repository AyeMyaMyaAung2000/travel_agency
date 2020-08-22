@extends('backendtemplate')

@section('content')
	<div class="container-fluid w-100 h-100" style="text-align: center;color:white;font-style: italic;background-color: #3f4652;font-size: 20px;">
	<h2 class="my-3">Hotel Detail</h2>
	<div class="row my-2">
		<div class="col-lg-12">
			<p><img src="{{ asset($hotel->photo)}}" class="img-fluid w-25">
		</div>
		
		<div class="col-lg-12">
			
			Hotel Name:{{$hotel->name}}<br>
			Hotel Price:{{$hotel->price}}MMk
				
		</div>
		</div>
	</div>
@endsection