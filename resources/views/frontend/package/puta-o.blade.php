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
	<h4 class="font-weight-bold">Puta-O Trip</h4>
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
									<h5 class="card-title font-weight-bold">Day 1:Mandalay
									</h5>
									<p class="card-text">
										Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel. After refreshment at hotel, enjoy a walk through downtown mandalay. 
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
									<h5 class="card-title font-weight-bold">Day 2:Kachin-Puta0</h5>
									<p class="card-text">
										Just as you arrive at the PutaO, you will feel the quiet atmosphere and the very fresh air. After refreshment, you can explore the culture of the minorities living there while walking in and out of the town. The inhabitants of the village are the Rawangs, one of the four minorities living in Putao. Due to poor infrastructure and difficult access to the region, the village life remains uninfluenced by any outsiders in term of culture and social, rather surrounding pristine forest and the snow-mountains seen from the village are eyes-catching to the visitors.
									</p>
								</div>
							</div>
						</div>
						<hr class="border-warning">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="card-body">
									<h5 class="card-title font-weight-bold">
									Day 3:Myint Sone</h5>
									<p class="card-text">
										ou will start driving a country road to upper Shangaung, passing through different villages of different minorities. After being dropped off at Shangaung village, you will start trekking on a gently ascending trail crossing small creek for about one hour, then start climbing up the winding trail of Mt. Shangaung of 1,460 m, which will be a great challenging for you. But as you get to the peak you will have the panoramic view of Putao and your lunch will be served there.
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
									<h5 class="card-title font-weight-bold">Day 4:Depature Mandalay</h5>
									<p class="card-text">
										As you get up, you should not forget to visit local market to explore the local products and to buy some souvenirs for your dear ones. We strongly recommend that you should buy lovely tea cups crafted from bamboo and try the taste of local organic fruits.At the end,your guide will transfer you to by car for onward departure. And our service will end up seeing you off at the terminal.
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