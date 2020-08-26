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
	<h4 class="font-weight-bold">Kalaw Trip</h4>
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
									<h5 class="card-title font-weight-bold">Day 1:Mandalay-Kalaw
									</h5>
									<p class="card-text">
										Kalaw is a great place for ethnic minority encounters and the surroundings are mainly habituated by Shan, Danu, Palaung and Pa-O people. Inside the town the best place to witness local life is the lively and colourful central market. Villagers come there to trade their produce from the surrounding region. Due to popularity of Kalaw the locals are already used to seeing foreigners, so the atmosphere is relaxed and you are welcome to join the hustle and bustle of the market.
									</p>
								</div>
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
									<h5 class="card-title font-weight-bold">Day 2:Trekking kalaw</h5>
									<p class="card-text">
										There are numerous alternative long and short routes; some choose to go by car to Lamaing and walk to Kalaw in one day, while other guides have found ways to extend the trip to four nights. Discuss the options with your guide.In general, you can expect at least four hours of mostly level walking each day, the only truly steep part being the ascent from Thandaung at Inle Lake. The second day passes through hilly agricultural areas, and as you approach Kalaw on day three, the trek passes through tall mountains fringed with pine trees and tea plantations.
									</p>
								</div>
							</div>
						</div>
						<hr class="border-warning">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 3:History of Kalaw Trekking</h5>
									<p class="card-text"> 
										Trekking Kalaw to Inle Lake is normally cheaper than going in the opposite direction, with some guides charging K40,000 per person, per day, not including the Inle Lake entrance fee (K12,500). If arranging your trek from Inle Lake, expect to pay K50,000 per person, per day, in groups of four or more. Rates include food but not the cost of shipping your gear to your destination (K3000 per bag).


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
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 4:Inlay-Pindaya</h5>
									<p class="card-text"> 
									Inle Lake is a major tourist attraction, and this has led to some development of tourist infrastructure. Many small and large privately-owned hotels and tour operations have arisen during the past few years. Local shops are flooded with consumer items, both local and foreign.
									The Pindaya Caves, a mild 45 minute walk away from the town, are the most famous attraction the town has to offer. Another lesser known attraction is the PlanBee Beekeeping Center.Visitors can test and buy pure organically made local honey and other bee products while enjoying a cup of coffee and the gorgeous view of Pone Taloke Lake.
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
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 5:Depature Mandalay</h5>
									<p class="card-text"> 
								
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
		</div>
		<div class="col-md-3">
			@foreach($categories as $category)
			<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>						
		@endforeach
	</div>
</div>
</div>
@endsection