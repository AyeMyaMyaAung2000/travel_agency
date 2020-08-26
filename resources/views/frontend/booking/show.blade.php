@extends('frontendtemplate')
@section('carousel')
<div class="bg">
	
</div>
@endsection
@section('welcome')
<div class="packagebg">
  <div class="container-fluid">

    <div class="row">
     <!-- Details -->
     <div class="col-lg-10 col-md-12 col-sm-12">

      <h1 class="text-center packtitle">Packages Booking</h1>
      <div class="container bg_img">
        <div class="row">
          <div class="offset-3 col-lg-6 my-2">
            <h1>{{ Auth::user()->name }}</h1>
<<<<<<< HEAD
            <h1>{{ Auth::user()->email}}</h1>
=======
             <h1>{{ Auth::user()->email}}</h1>
             <a href="#" class="buynow btn btn-outline-secondary">Buy now</a>
>>>>>>> ae2e90f01dce8b222642aff39bb8221a38347a86
            <div id="text"  class="jumbotron">              
            </div>

            <div class="offset-md-2 col-md-4 mt-3">
              @role('customer') 
              <a href="#" class="btn btn-secondary buy_now">Checkout</a>
              @else
              <a href="{{route('login')}}" class="btn btn-secondary ">Login To Buy</a>
              @endrole
            </div>
          </div>
        </div>
      </div>
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
@section('script')
<script src="{{asset('frontend/script.js')}}"></script>
@endsection