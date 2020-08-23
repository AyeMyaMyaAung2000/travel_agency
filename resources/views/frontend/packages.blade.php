@extends('frontendtemplate')
@section('carousel')
<div class="bg">
	
</div>
@endsection
@section('welcome')
<div class="packagebg">
<div class="container-fluid">
		<h1 class="text-center packtitle">Luxury Tour</h1>
		<div class="row">
			<!-- Details -->
			<div class="col-lg-10 col-md-12 col-sm-12">
				@foreach($packages as $package)
				<div class="card mt-3 packages">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 ">
							<img src="{{asset($package->photo)}}" width="450px" height="300px" class="img-fluid">
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 text-left">
							<h4 class="py-3  px-3">{{$package->name}}</h4>
							<p><i class="fas fa-location-arrow px-2 arr text-warning"></i>Yangon  – Mandalay – Bagan – Inlay</p>
							<hr class="p-0 m-0">
							<p><i class="far fa-clock px-2 text-warning"></i>  Duration: {{$package->duration_time}}</p>
							<hr class="p-0 m-0">
							<p><i class="fas fa-dollar-sign px-2 text-warning"></i>
								Price: $<span style="color:red"> {{$package->price}}</span>
							
							<a href="package6.html" class="btn text-light mx-5 my-1 px-3  button">Detail</a></p>
							<hr class="p-0 m-0">
						</div>
						
					</div>
				</div>
				@endforeach
		
			</div>
			<!-- Catego -->
			<div class="col-lg-2 col-md-12 col-sm-12 mt-3 ">
				<div class="row ">
					<div class="col-lg-12">
						<div class="card slidebar">
							<h4 class="text-center">Categories</h4>
							<ul>
								@foreach($categories as $category)
								<li>
									<a href="{{route('packages',$category->id)}}" class="yu"><h5>{{$category->name}}</h5></a>
								</li>
								@endforeach
								
							</ul>
						</div>
					</div>

					<div class="col-lg-12 mt-3 mb-3">
						<div class="card slidebar">
							<h4 class="text-center">Destination</h4>
							<ul>
								<li>
									<a href="yangon.html" class="yu" ><h5>Yangon</h5></a>
								</li>
								<li>
									<a href="mandalay.html" class="yu"><h5>Mandalay</h5></a>
								</li>
								
							</ul>
						</div>
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
          <li class="nav-item ">
            <a class="nav-link" href="{{route('index')}}">Home </a>
          </li>
         
          
          <li class="nav-item">
            <p class="nav-link" href="#"><i class="fas fa-angle-double-right"></i></p>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Packages<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
	@endsection