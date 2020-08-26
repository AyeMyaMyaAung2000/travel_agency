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
	<h4 class="font-weight-bold">Ngapli Trip</h4>
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
							<a href="contactinfo.html" class="btn btn-outline-dark">Enquire
						</a>
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
					<h5 class="card-title font-weight-bold">Day 1:Mandalay Arrive
					</h5>
				<p class="card-text">
				Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel. Pathein formerly called Bassein, is the largest city and the capital of the Ayeyarwady Region, Myanmar (Burma). It is located 190 km (120 mi) west of Yangon on the bank of the Pathein River (Pathein), which is a western branch of the Irrawaddy River,[2] the city has a population of 237,089 (2017 census). Although once part of the Mon kingdom, Pathein has few ethnic Mon residents today. The majority are of Bamar, Burmese Indians and Karen ethnicity. There are, however, notable minority Rakhine. 
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
			<h5 class="card-title font-weight-bold">Day 2:Pathein(ngapli)</h5>
				<p class="card-text">
					Ngwesaung is a beach resort located 48 km west of Pathein, Ayeyarwady Region, Myanmar. The beach is 5 hours drive, with no traffic, away from the principal city of Yangon, and an airport is in the works. Buses leave at 6am & 9:30pm from in front of the Yangon Central Railway Station. Opened in March 2000, Ngwe Saung is newer than nearby and more popular Chaungtha Beach, and is designed to attract people with larger holiday budgets.
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
						<p class="card-text"> 
							After breakfast at hotel, you will be picked up by your guide and transferred to mandalay by car for your return departure city .(OR free morning until your departure time.)
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
{{-- 						<hr class="border-warning">
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
						</div> --}}
	<hr class="border-warning">
		</div>
		<div class="col-md-3">
			@foreach($categories as $category)
			<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>						
		@endforeach
	</div>
</div>
</div>
@endsection