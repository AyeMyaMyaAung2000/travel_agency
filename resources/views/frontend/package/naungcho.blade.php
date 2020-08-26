

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
	<h4 class="font-weight-bold">Bagan Trip</h4>
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
									<h5 class="card-title font-weight-bold">Day 1:Mandalay-Shan State
									</h5>
									<p class="card-text">
										Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel.In the areas surrounding Naungcho, there is the Gokteik viaduct, Ban Bway Kyin Waterfall for those love trekking and adventure, Inwai waterfall, Yay Pyan TaunG Waterfall, Linnoe Cave, Kyauk Kyan cave, Seikphu Hot Spring, and the Dothtawaddy River flowing underneath Gokteik viaduct.
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
									<h5 class="card-title font-weight-bold">Day 2:Naung Cho</h5>
									<p class="card-text">
											Another attraction in Naungcho is Tain Pin Lei aka the sea of clouds at Naung Cho Gyi village in Naungcho Township.It is a trip at offers scenic viewing pleasure of the Dothtawaddy River from 3000 feet above. Viewers are able to see the cloudy sky from dawn to 10:00 am.
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
									<p class="card-text">After breakfast, free day by your own in Bagan till noon, then transfer to Nyaung U to mandalay by car.</p>
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

					</div>
					<div class="col-md-3">
						@foreach($categories as $category)
						<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>
						@endforeach

					</div>
				</div>
			</div>
			@endsection


