@extends('frontendtemplate')
@section('carousel')
<div class="bg">
	
</div>
@endsection
@section('welcome')
<div class="packagebg">
	<div class="container">
		<h1 class="text-center packtitle"></h1>
		<div class="row">
			<!-- Details -->
			<div class="col-lg-9 col-md-9 col-sm-12">
				@foreach($packages as $package)
				<div class="card mt-3 packages" data-aos="fade-up" data-aos-duration="800">
					<div class="row" >
						<div class="col-lg-6 col-md-12 col-sm-12 " >
							<img src="{{asset($package->photo)}}" width="450px" height="300px" class="img-fluid">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 text-left mt-3ss">
							<p><i class="fas fa-location-arrow px-2 mt-3 arr" style="color: #cfbb78"></i>{{$package->name}}</p>
							<hr class="p-0 m-0">
							<p><i class="far fa-clock px-2" style="color: #cfbb78"></i>  Duration: {{$package->duration_time}}</p>
							<hr class="p-0 m-0">
							<p><i class="fas fa-dollar-sign px-2" style="color: #cfbb78"></i>
								Price: $<span style="color:red"> {{$package->price}}</span>

								<a href="{{route('holiday1',$package->id)}}" class="btn ml-5 mt-3 px-3  button">Detail</a></p>
								<hr class="p-0 m-0">
							</div>

						</div>
					</div>
					@endforeach

				</div>
				<!-- Catego -->
				<div class="col-lg-3 col-md-3 col-sm-12 mt-3 ">
					<div class="row ">
						<div class="col-lg-12">
							
								<h4 class="text-center">Myanmar Tours</h4>

									@foreach($categories as $category)
									<a href="{{route('packages',$category->id)}}"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>
									@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@section('pageindicator')
	<div class="container-fluid" style="width: 50">
		.
	</div>
	<div class="container">
		
		<nav class="navbar navbar-expand-lg navbar-light pagecontroller bg-light">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link" href="{{route('index')}}">Home </a>
					</li>


					<li class="nav-item">
						<p class="nav-link" href="#"><i class="fas fa-angle-double-right"></i></p>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Packages<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	@endsection