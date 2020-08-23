@extends('frontendtemplate')
@section('carousel')
<div class="bg">
	
</div>
@endsection
@section('welcome')

<div class="container">
		<h1 class="text-center packtitle">Luxury Tour</h1>
		<div class="row">
			<!-- Details -->
			<div class="col-lg-9 col-md-12 col-sm-12">
				@foreach($packages as $package)
				<div class="card mt-3 packages">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 ">
							<img src="{{asset($package->photo)}}" width="450px" height="300px" class="img-fluid">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 text-left">
							<h3 class="py-3  px-3">Bagan View</h3>
							<p><i class="fas fa-location-arrow px-2 arr text-warning"></i>Yangon  – Mandalay – Bagan – Inlay</p>
							<p><i class="far fa-clock px-2 text-warning"></i>  Duration 11 Days / 10 Nights</p>
							<p><i class="fas fa-dollar-sign px-2 text-warning"></i>
								Price: $<span style="color:red"> 3840</span>
							</p>
							<a href="package6.html" class="btn btn-warning mx-5 my-3 pt-2  button">Details</a>

						</div>
						
					</div>
				</div>
				@endforeach

				
				
			</div>
			<!-- Catego -->
			<div class="col-lg-3 col-md-12 col-sm-12 mt-3 ">
				<div class="row ">
					<div class="col-lg-12">
						<div class="card slidebar">
							<h3 class="text-center">Categories</h3>
							<ul>
								<li>
									<a href="tour.html" class="yu">Latest Myanmar Tours</a>
								</li>
								<li>
									<a href="luxury.html" class="yu">Luxury Tours</a>
								</li>
								<li>
									<a href="nature.html" class="yu">Adventure & Nature Tours</a>
								</li>
								<li>
									<a href="pilgrimage.html" class="yu">Pilgrimage Tours</a>
								</li>
								<li>
									<a href="day.html" class="yu">Day Tours</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-12 mt-3 mb-3">
						<div class="card slidebar">
							<h3 class="text-center">Destination</h3>
							<ul>
								<li>
									<a href="yangon.html" class="yu" >Yangon</a>
								</li>
								<li>
									<a href="mandalay.html" class="yu">Mandalay</a>
								</li>
								<li>
									<a href="bagan.html" class="yu">Bagan</a>
								</li>
								<li>
									<a href="inlay.html" class="yu">Inlay</a>
								</li>
								<li>
									<a href="pwl.html" class="yu">Pyin Oo Lwin</a>
								</li>
								<li>
									<a href="sag.html" class="yu">Sagaing</a>
								</li>
								<li>
									<a href="kky.html" class="yu">KyaikhtiYo</a>
								</li>
								<li>
									<a href="bago.html" class="yu">Bago</a>
								</li>

								<li>
									<a href="pdy.html" class="yu">PindaYa</a>
								</li>

								<li>
									<a href="pto.html" class="yu">Putao</a>
								</li>

								<li>
									<a href="mko.html" class="yu">Mrauk O</a>
								</li>

								<li>
									<a href="beaches.html" class="yu">Beaches</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@section('pageindicator')
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
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <p class="nav-link" href="#"><i class="fas fa-angle-double-right"></i></p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
	@endsection