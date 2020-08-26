@extends('frontendtemplate')
@section('welcome')
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light pagecontroller bg-light">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
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
	<!-- parallx -->

	<div class="container packtitle">
		<h4 class="font-weight-bold">MYANMAR HOLIDAY TOUR</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-4"><img src="{{asset('frontend/img/route1.gif')}}" class="img-fluid w-50"></div>
				<div class="col-md-8">
					<h5><i class="fas fa-clock text-warning"></i>
					Duration: {{$package->duration_time}}</h5>
				    <h5><i class="fas fa-location-arrow text-warning"></i>
					Coverage: {{$package->name}}</h5>
					<h5><i class="fas fa-dollar-sign text-warning"></i>
					Price From: ${{$package->price}}</h5>
					
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
	<!-- Package -->
	<div class="container">
		<div class="row">
					<div class=" offset-1 col-md-10">
					{!!$package->description!!}
				
		    </div>
			
		</div>
	</div>
@endsection
{{-- @section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#summernote').summernote();
	});
</script>
@endsection --}}