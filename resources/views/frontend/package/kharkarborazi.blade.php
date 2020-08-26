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
	<h4 class="font-weight-bold">Hill Trip</h4>
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

							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="row no-gutters">

										<img src="tourimage/yangon1.jpg" class="card-img">

									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">Day 1:Dahawndam – Shanmara</h5>
									<p class="card-text">
									From Dahawndam, we continue trek further north toward the base of Hkakaborazi. At first through farmland infested with wheat field and prayer wheels till you get to Ningran river. We cross Gwelang creek which flows from the snow capped mountains far ahead. After trek about two hours we get in to “Adung George” (locally known as Masansin) which is a fast flowing river looks like water fall having large boulders in between. This George formed rather like stair that water flow through one step to another passing by each step through the massive boulders. After difficult trek (7 mile, approx. 4 hour). Finally get to “Masunsong Wang jungle camp” (locally known as “Shanmara” camp, situated 7000 feet above sea level. Dinner and overnight at camp.
					</p>
				</div>
			</div>

	</div>
						<hr class="border-warning">
						<div class="row">

							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">Day 2:Shanmara - Naradon
									</h5>
									<p class="card-text">
										We continue trek to Naradon camp situate by the Adunwan river, locates at 7500 feet above sea (7 mile, approx. 4 hour) on strenuous trek along Gweanling creek is infested by large trees that you have probably never seen before. Here we will witness some of the Rhododendron trees with three or even four meter in circumference. Myanmar generally covers with evergreen forest however this area has been similar of those of Alpine region such as Birch, Maple, Cherry, Walnut and once you get to upper layer we shall witness more of blue pine and Rhododendron. Dinner and overnight at camp.

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
									<h5 class="card-title font-weight-bold">Day 3:Rasandum - Rasansan</h5>
									<p class="card-text">
											We continue our today destination of Hkakaborazi base camp of Rasansan (as known as Asanbonwang), located at 13000 feet above sea.Unlike many other snow capped mountains in Myanmar Hkakaborazi having trees and plants only at the based but there was just stone and snow above 7000 feet.Making camp fire at this point is difficult thus we use LPG stove for cooking but we will have to cope up with cold and gusty windy weather. Dinner and overnight at camp.Hkakabo actually was a mountain range thus there are many gorges between mountains and several peaks of 5000 to 5500 meters eventual there stood one higher then every one in the area with 8889 meter above sea.
									</p>
								</div>
							</div>
						</div>
						<hr class="border-warning">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 4:Relax Top of Hkakarborazi</h5>
									<p class="card-text">
											One consider lucky to spot the Hkakaborazi at one single try which usually hidden behind the mist and cloud thus people hardly see it. Its northern face is rather step reef with “jagged rocks” having pile by pile of rock surface looks the mountain somewhat scary. Also it makes such scary sounds having stone and water falling down owing melting ice which brings stone boulders down along with them in to the river bed.
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

										<img src="tourimage/bagan1.jpg" class="card-img">

									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">Day 5:Depature Mandalay</h5>
									<p class="card-text">After breakfast at hotel, you will be picked up by your guide and transferred to mandalay by car for your return departure city .(OR free morning until your departure time.)
									</p>
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