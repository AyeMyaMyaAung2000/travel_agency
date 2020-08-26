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
		<h4 class="font-weight-bold">Mandalay Trip</h4>
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
					<a href="{{route('booking',$package->id)}}" class="btn btn-outline-primary">Book This Tour</a>
					<a href="contactinfo.html" class="btn btn-outline-dark">Enquire</a>
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

					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="row no-gutters">

								<img src="tourimage/yangon1.jpg" class="card-img">

							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">Day 1:Arrival Mandalay</h5>
							<p class="card-text">
								Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel. After refreshment at hotel, enjoy a walk through downtown mandalay. 
							</p>
						</div>
					</div>

				</div>
				<hr class="border-warning">
				<div class="row">

					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">Day 2:Still At Mandalay</h5>
							<p class="card-text">Take an early morning car to mandalay to the various places. Check in hotel and rest for a while. This famous archaeological site, located on the banks of the Ayerwadi River, is where Theravada Buddhism was first introduced to the Kingdom.</p>
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
				{{-- <hr class="border-warning">

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
							<h5 class="card-title font-weight-bold">Day 3:Chin state</h5>
							<p class="card-text">After breakfast at the hotel, transfer by car to chin hill. Monywa is the commercial centre and cultural tourism site, was established in 1857 by King Mindon, Arrive at Chin State and drive to continue  to the chin hill resource.</p>
						</div>
					</div>
				</div>
				<hr class="border-warning">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">
							Day 4:Mandalay Depature</h5>
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
				<hr class="border-warning">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="card">
							<div class="row no-gutters">

								<img src="tourimage/bagan1.jpg" class="card-img">

							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">Day 5:Yangon</h5>
							<p class="card-text">After breakfast, transfer to the airport and flight back to Yangon (domestic flight, 1 ½ hour flying). Arrive at Yangon and visit to Bogyoke Market (Scott’s Market) where you can find local products such as Gems & Jewelry , slippers, cloth, and so on. Then transfer to the Yangon International Airport for the departure flight to conclude this unique experience.</p>
						</div>
					</div>
				</div>
				<hr class="border-warning"> --}}
				
			</div>
			<div class="col-md-3">
				@foreach($categories as $category)
				<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>
				@endforeach
				
			</div>
		</div>
	</div>
@endsection