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
	<h4 class="font-weight-bold">Hyper Waterfall Trip</h4>
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
					<h5 class="card-title font-weight-bold">Day 1:Mandalay-Shan State
					</h5>
				<p class="card-text">
				Arrive at mandalay where you will be welcomed by your English speaking local tour guide and transferred to your hotel.Haikpa waterfall, one of cultural heritages in Mongshu Township where Tainwe and Palaung ethnics reside in unison in southern Shan State, is formed with seven to nine steps of waterfall. It is a natural scene filled with various species of wildlife and birds, said locals.
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
					Day 2:Hyper Waterfall</h5>
						<p class="card-text"> 
							Haikpa waterfall is located about one mile from Haikpa Village. An asphalt road repaved in the village reaches the new bridge of the village. A temporary road links between the new bridge and the waterfall passing through paddy fields. In the rainy season, small vehicles may face some difficulties in damage of the road. Visitors may see voluntary activities of local children in repairing the road with the use of hoes. Hence, some visitors give tips to those children.
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
					Day 3:Mandalay Depature</h5>
						<p class="card-text"> 
							After breakfast, free day by your own in taungyi till noon, then transfer to mandalay by car.
						</p>
					</div>
				</div>
			<div class="col-md-12 col-lg-4">
		<div class="card">


		</div>
		<div class="col-md-3">
			@foreach($categories as $category)
			<a href="#"><img src="{{asset($category->photo)}}" class="img-fluid tour p-1"></a>						
		@endforeach
	</div>
</div>
</div>
@endsection