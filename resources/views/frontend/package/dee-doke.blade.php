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
	<h4 class="font-weight-bold">Day Trip</h4>
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
					<div class="col-md-9">
						<h4>Detail Itinetary</h4>
						<div class="row">

							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">Day 1:Mandalay-Pyin Oo Lwin
									</h5>
									<p class="card-text">
										After breakfast, drive to pyin oo lwin.In terms of waterfalls in Myanmar, Dee Doke Waterfall Mandalay (also known as Dee Dote) has to take the cake for the most surreal falls and the most epic blue lagoon pools in the country. Getting here takes a little bit of effort but if you’re cut out for the ride, you’ll be rewarded with one of the best swimming spots possibly in all of Myanmar!
									</p>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="row no-gutters">

										<img src="tourimage/bagan1.jpg" class="card-img">

									</div>
								</div>
							</div>

						</div>
						<hr class="border-warning">

						<div class="row">
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="row no-gutters">

										<img src="tourimage/bgmarket1.jpg" class="card-img">

									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">Day 2:PyiChit-KanTawGyi</h5>
									<p class="card-text">
											Even its official name is Maha Ant Htoo Kan Thar Pagoda , all the locals call it " Pyi Chit Paya ". Pyi Chit means the Buddha who beloved country.So , all the Buddhists donated this Buddha value & make a enshrine to reside this Buddha Image in 2000. Even it's quite new fashion Buddha , it's nice to visit there when you are in Pyin Oo Lwin. In front of it , In the Playground , Lighting Festival is celebrated annually during November ( at the full moon day of Tazaungmone ).Enjoy your travel around Myanmar!
								</p>
								</div>
							</div>
						</div>
						<hr class="border-warning">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 3:Mandalay Depature</h5>
									<p class="card-text">After breakfast at hotel, you will be picked up by your guide and transferred to mandalay by car for your return departure city .(OR free morning until your departure time.)</p>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="row no-gutters">

										<img src="tourimage/bagan1.jpg" class="card-img">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						@foreach($categories as $category)
						<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>
						@endforeach

					</div>
				</div>
			</div>
			@endsection