@extends('frontendtemplate')
@section('carousel')
 <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
   {{--  <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol> --}}
   <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('frontend/img/ayemyamyaaung.jpg')}}" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h3 data-aos="zoom-in-up" style="color:#10325e">Find A Perfect Deal For Your Next Trip</h3>
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="frontend/img/beach.webp" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h3 style="color:#10325e">We Are Committed To Sustainable And Responsive Travel</h3>
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="frontend/img/kuthotaw.jpg" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption mb-5 d-none d-md-block main-text">
          <h3 class="mb-4 text-capitalize"><span style="color:#10325e">Enjoy Your Dream Vacation</span></h3>
         
        </div>
      </div>
    </div>

  </div>
@endsection
@section('pageindicator')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light pagecontroller bg-light">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
             
              <a href="#v-pills-home" class="nav-link p-3 btn-hero" id="v-pills-profile-tab" data-toggle="pill" role="tab" aria-controls="v-pills-profile" aria-selected="false">Galary</a>&nbsp;
            
             
            </div>
          </div>
          <div class="col-md-3"></div>
          <div class="tab-content py-5 col-md-8" id="v-pills-tabContent"> <span>WHERE ARE YOU WANT TO GO?</span>
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="block-17">
                <form class="d-block d-lg-flex" action="{{route('packagesearch')}}" method="post">
                  @csrf
                  <div class="fields d-block d-lg-flex">
                    <div class="text-field-search one-third">
                      <input type="text" class="form-control w" name="search" placeholder="search packages" >
                    </div>
                   </div>
                  <input type="submit" class="search-submit btn btn-search" value=" Search " name="">
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
          <div class="mb-4 margin-lg-0 col-lg-4 order-lg-2">
            <a href="#" class="effect">
              <img src="frontend/img/1.jpg" class="img-fluid img1">
            </a>
          </div>
          <div class="col-lg-8 ml-auto align-self-center order-lg-1" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1200">
            <h5 class="text-center p-2">WELCOME TO MYANMAR AND MYANMAR TOURISM SERVICES</h5>
            <p class="text-center">
              Mingalarbar! It means "Auspiciousness to you" in Myanmar , the national language. This greeting that is expressed on the faces, mentioned in the appearances in the uncontrollable cordialities of Myanmar people showing the peaceful, friendliness and warm hospitalities of Myanmar, the Golden Land.
              Myanmar's community peace and tranquility are attractive and enjoyable for traveling and discovering the virgin destinations around Myanmar, respectively. Our professional tour guides are patient, friendly, honest, knowledgeable and well understood for how to conduct an enjoyable and unforgettable valued trip in Myanmar.
            We are then confident to provide the supreme quality services to our distinguish guests from the every parts of the world as the right and reliable partner in Myanmar.</p>

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
    <h4 class="text-center">Myanmar Tour Package</h4>
    <div class="row">
    	@foreach($packages as $package)
     <div class="col-md-4 mt-5">
       <div class="book ml-5" data-aos="zoom-in-up" data-aos-delay="100">
        <div class="back"></div>
       <!--  <div class="page6 text-dark">hello</div>
        <div class="page5"></div> -->
        <div class="page4 text-center"><span class="booktext">{{$package->name}}<br>{{$package->price}}$</span><a href="{{route('holiday1',$package->id)}}" class="btn" style="background-color: #beebe9;">Detail</a></div>

        <div class="page3"><img src="{{asset($package->photo)}}" class="img-fluid b"></div>
        <div class="page2"></div>
        <div class="page1"></div>
        <div class="front text-center"><img src="{{asset($package->photo)}}" class="img-fluid b"></div>
      </div>
    </div> 
    @endforeach
  </div>
  <a href="{{route('filterpackage')}}" class="btn btn-outline-dark mt-5 my-4">see all packages</a>
</div>
<!-- end book -->
<!-- item carousel -->

<div>
 <div class="" style="background-color: #f7f1e4;">
  <div class="container text-center container-fluid items" style="background-color: #fcfaf0">
    <div class="jumbotron jumbotron-fluid" style="background-color: #fcfaf0">
      <h4 class="">POPULAR TOURS</h4>
      <hr class="divider">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="slick-slider itemcarousel py-3" >
            	@foreach($categories as $category)
              <div class="text-center photohover">
                <div class="card itemcaro" >
                  <a href="{{route('packages',$category->id)}}"><img src="{{asset($category->photo)}}" width="250px" height="100px" class="img-fluid card-img-top"></a>
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