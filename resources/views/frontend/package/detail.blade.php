@extends('frontendtemplate')
@section('welcome')
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light pagecontroller bg-light">
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<p class="nav-link" href="#"><i class="fas fa-angle-double-right"></i></p>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Packages</a>
					</li>
					<li class="nav-item">
						<p class="nav-link" href="#"><i class="fas fa-angle-double-right"></i></p>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Detail</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- end of page indicator -->
		<div class="container packtitle">
		<h4 class="font-weight-bold">MYANMAR HOLIDAY TOUR</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h5><i class="fas fa-clock text-warning"></i>
					Duration: {{$package->duration_time}}</h5>
				    <h5><i class="fas fa-location-arrow text-warning"></i>
					Coverage: {{$package->name}}</h5>
					<h5><i class="fas fa-dollar-sign text-warning"></i>
					Price: ${{$package->price}}</h5>
					
					@role('customer')
					<a href="{{route('booking',$package->id)}}" class="btn btn-outline-dark buy_now">Booking</a>
					@else
					<a href="{{route('login')}}" class="btn btn-outline-dark">Login to book</a>
					@endrole
				</div>
			</div>
		</div>
		<hr class="border-warning">
	</div>
<div class="container">
	<div class="row">
		<div class=" col-md-9">
			{!!$package->description!!}
		</div>
				<div class="col-lg-3 col-md-3 col-sm-12 mt-3 ">
					
							
								<h4 class="text-center">Myanmar Tours</h4>

									@foreach($categories as $category)
									<a href="{{route('packages',$category->id)}}"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>
									@endforeach
						
				</div>
	</div>
</div>

<!-- end of page indicator -->
	@endsection