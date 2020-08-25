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
					<a href="{{route('login')}}" class="btn btn-outline-dark">login to book</a>
					@endrole
					
				</div>
			</div>
		</div>
		<hr class="border-warning">
	</div>
	<!-- Package -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
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
							<h5 class="card-title font-weight-bold">Day 1:Arrival Yangon</h5>
							<p class="card-text">
								Upon arrival at Yangon international airport, our tour guide would welcome you and transfer to the hotel for check in. After that sightseeing start in Yangon, including Sule Pagoda in the heart of the city, Chauktatgyi Pagoda, one of the biggest colossal reclining Buddha image in Myanmar. Special evening visit to the massive Shwedagon Pagoda – famous worldwide – its golden stupa is the ‘ Heart ’ of Buddhism Myanmar. The Pagoda is believed to be 2,500 years old and the central stupa in surrounded by dozens of intricately decorated buildings and statues. There are always many Myanmar People praying and making offerings. Overnight at hotel in Yangon.
							</p>
						</div>
					</div>

				</div>
				<hr class="border-warning">
				<div class="row">

					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">Day 2:Bagan</h5>
							<p class="card-text">Take an early morning flight to Bagan. Check in hotel and rest for a while. This famous archaeological site, located on the banks of the Ayeyarwady River, is where Theravada Buddhism was first introduced to the Kingdom. It was once the site of 10,000 temples, pagodas and monasteries – it still boasts a staggering 2000 brick and gilded ruins. After arriving this morning, your leader will take you on a half-day bicycle tour of the stunning UNESCO site. Seeing these marvels on two wheels is ideal. As the site is quiet spread out you’ll get to the famous temples like Ananda Temple, Thatbyinnyu, Sularmani, Shwe Gu Gyi, Dhammayangyi Pagodas. Back to hotel and rest for a while as the temperature out site is high around 40 degree Celsius.</p>
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
							<h5 class="card-title font-weight-bold">Day 3:Mandalay</h5>
							<p class="card-text">After breakfast at the hotel, transfer to airport for flight to Mandalay (domestic flight 30 minute flying). Mandalay, the commercial centre and cultural tourism site, was established in 1857 by King Mindon, Arrive at Tada Oo International airport and drive to Mandalay and check in at the hotel./p>
						</div>
					</div>
				</div>
				<hr class="border-warning">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold">
							Day 4:Inle lake</h5>
							<p class="card-text">TFrom Mandalay to Inle by domestic flight. Arrive to Heho and proceed to Inle lake by private car. Nyaungshwe, your gateway to Inle Lake, and a picturesque and culturally fascinating area. Check in and rest for a while. Have lunch at the local restaurant where you can enjoy Shan style of cooking’s. After lunch Inle normal sightseeing and back to hotel in the evening. Then enjoy free time to perhaps visit the bustling night market or enjoy a drink in one of the local bars. Stop by to see the local cigar makers, silk and lotus weavers, and see the unique floating gardens.</p>
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
				<hr class="border-warning">
				
			</div>
			
		</div>
	</div>
@endsection