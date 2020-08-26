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
	<h4 class="font-weight-bold">Kyaik Hti Yo Hill Trip</h4>
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
									<h5 class="card-title font-weight-bold">Day 1:Mandalay Arrive
									</h5>
									<p class="card-text">
										Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel. (If the room is not ready, proceed for Yangon sightseeing.) After refreshment at hotel, enjoy a walk through downtown mandalay. 
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
									<h5 class="card-title font-weight-bold">Day 2:KyaikHtiYO</h5>
									<p class="card-text">
										After breakfast at hotel, drive to Kyaikhtiyo.,the small stupa sits on top of a massive rock which is completely covered with gold leaf and delicately balanced on the edge of the cliff.Take the light trek to the summit or you may sit on the easy-chair (own expense) carried by four men. Stop by at the roadside shops to view some unusual products that come from the jungle. At summit, marvel the sunset on hilltop and watch the evening activities at the shrine of the local pilgrimages before descent trek to your Hotel for overnight. Overnight at the hotel in Kyaikhtiyo.
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