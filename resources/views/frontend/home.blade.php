@extends('frontendtemplate')
@section('carousel')
 <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="frontend/img/carousel2.jpg" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h1 data-aos="zoom-in-up">Find a Perfect Deal For Your Next Trip</h1>
          <p style="font-size: 20px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <a href="#" class="btn btn-hero py-2 px-4">View packages</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="frontend/img/carousel3.jpg" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h1>find a perfect deal for your next trip</h1>
          <p style="font-size: 20px;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          <a href="#" class="btn btn-hero py-2 px-4">View packages</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="frontend/img/carousel4.webp" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h1 class="mb-4 text-capitalize">find a perfect deal for your next trip</h1>
          <p style="font-size: 20px;">vitae elit libero, a pharetra augue mollis interdum.</p>
          <a href="#" class="btn btn-hero py-2 px-4">View packages</a>
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
@section('search')
<section>
    <div class="section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tab-search">
            <div class="nav nav-pills" id="v-pills-tabs" role="tablist" aria-orientation="vertical">
              <a href="#v-pills-home" class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" role="tab" aria-controls="v-pills-home" aria-selected="true">Flights</a>&nbsp;
              <a href="#v-pills-home" class="nav-link p-3 active" id="v-pills-profile-tab" data-toggle="pill" role="tab" aria-controls="v-pills-profile" aria-selected="false">Hotels</a>&nbsp;
              <a href="#v-pills-home" class="nav-link p-3 active" id="v-pills-messages-tab" data-toggle="pill" role="tab" aria-controls="v-pills-messages" aria-selected="false">Car Rents</a>&nbsp;
              <a href="#v-pills-home" class="nav-link p-3 active" id="v-pills-settings-tab" data-toggle="pill" role="tab" aria-controls="v-pills-settings" aria-selected="false">Crusis</a>
            </div>
          </div>
          <div class="col-md-3"></div>
          <div class="tab-content py-5 col-md-8" id="v-pills-tabContent"> <span>WHERE ARE YOU WANT TO GO?</span>
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex">
                  <div class="fields d-block d-lg-flex">
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control" name="" placeholder="search location">
                    </div>
                    <div class="check-in one-third">
                      <input type="date" class="form-control" name="" placeholder="check-in date">
                    </div>

                    <div class="select-wrap one-third">
                      <select name="" id="" class="form-control">
                        <option value="">Travel type</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3+</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-search" value="Search Tour" name="">
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('welcome')
 <div class="container">
    <div class="row img-wrap mb-5 mb-lg-0">
      <div class="col-12">
        <div class="row">
          <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
            <a href="#" class="effect">
              <img src="frontend/img/1.jpg" class="img-fluid img1">
            </a>
          </div>
          <div class="col-lg-5 ml-auto align-self-center order-lg-1">
            <h2 class="text-black">Culture</h2>
            <p class="mb-4">
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          
          </div>
        </div>
        
      </div>
    </div>
    <hr>
  </div>

@endsection
@section('itemcarousel')
 <!-- book -->
  <div class=" text-center booksection container-fluid">
    <h4 class="text-center">Book Now Package</h4>
    <div class="row">
    	@foreach($packages as $package)
     <div class="col-md-4 mt-5">
       <div class="book ml-5" data-aos="zoom-in-up" data-aos-delay="100">
        <div class="back"></div>
       <!--  <div class="page6 text-dark">hello</div>
        <div class="page5"></div> -->
        <div class="page4">{{$package->name}}</div>
        <div class="page3"><img src="frontend/img/10.jpg" class="img-fluid b"></div>
        <div class="page2"></div>
        <div class="page1"></div>
        <div class="front text-center"><img src="{{asset($package->photo)}}" class="img-fluid b"></div>
      </div>
    </div> 
    @endforeach
  </div>
  <a href="#" class="btn btn-outline-info mt-5">see all packages</a>
</div>
<!-- end book -->
<!-- item carousel -->

<div>
 <div class="" style="background-color: #f7f1e4;">
  <div class="container text-center container-fluid" style="background-color:  #f7f1e4">
    <div class="jumbotron jumbotron-fluid" style="background-color:  #f7f1e4">
      <h1 class="">POPULAR PACKAGES</h1>
      <hr class="divider">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="slick-slider itemcarousel py-3" >
            	@foreach($categories as $category)
              <div class="text-center photohover">
                <div class="card itemcaro" >
                  <img src="{{asset($category->photo)}}" width="250px" height="100px" class="img-fluid card-img-top">
                  <div class="card-body h-25">
                   <h5 class="py-3  px-3">{{$category->name}}</h5>
         
                </div>
                <a href="package6.html" class="btn btn-info btn-md">Details</a>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </div>
  </div>
  <!--   <a href="tour.html" class="btn btn-info text-dark " style="border: 50px;"><h5>CHECKOUT ALL PACKAGES</h5></a> -->
</div>
</div>
</div>
</div>

<!-- testing -->
@endsection