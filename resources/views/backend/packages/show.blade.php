@extends('backendtemplate')

@section('content')
	<div class="container-fluid w-100 h-100" style="text-align: center;color:white;font-style: italic;background-color: #3f4652;font-size: 20px;">
	<h2 class="my-3">Package Detail</h2>
	<div class="row my-2">
		<div class="col-lg-6 my-2">
			<p><img src="{{ asset($package->photo)}}" class="img-fluid">
		</div>
		
		<div class="col-lg-6 my-1">
			
			Package Name:&nbsp;&nbsp;{{$package->name}}<br><hr>
			Package Price:&nbsp;&nbsp;{{$package->price}}MMk<br><hr>	Duration Time:&nbsp;&nbsp;{{$package->duration_time}}<br><hr>
			Car:&nbsp;&nbsp;{{$package->car->name}}<br><hr>
			Hotel:&nbsp;&nbsp;{{$package->hotel->name}}<br><hr>
			Category:&nbsp;&nbsp;{{$package->category->name}}<br><hr>
			Description:&nbsp;&nbsp;{{$package->description}}<br><hr>
		</div>
		</div>
	</div>
@endsection