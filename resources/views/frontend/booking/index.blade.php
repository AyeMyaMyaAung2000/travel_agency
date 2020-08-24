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
            Interest Tour Package:<span style="color:blue;"> {{$package->name}}</span>
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">
            Name:<input type="text" name="passenger" class="form-control" id="username" required="required" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" readonly="readonly">
           
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">
            Emaill:<input type="text" name="passenger" class="form-control" id="email" required="required" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}" readonly="readonly">    
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">
            Phone Number:<input type="number" name="passenger" class="form-control" id="phoneno" required="required">    
          </div>
          <hr>

          <div class="offset-3 col-lg-6 my-2 form-group">
            <label>Car</label>
            <select name="subcategory" class="form-control" id="car">
              @foreach($cars as $car)
              <option value="{{$car->price}}">{{$car->name}}</option>
              @endforeach  
            </select>
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">
            <label>Hotel</label>
            <select name="subcategory" class="form-control" id="hotel">
              @foreach($hotels as $hotel)
              <option value="{{$hotel->price}}">{{$hotel->name}}</option>
              @endforeach  
            </select>
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">

            Expected Date Of Arrival:<input type="date" name="depature_date" class="form-control" id="date" required="required">
            @error('depature_date')
            <p class="text-danger">Depature date is required</p>
            @enderror
          </div>

          <div class="offset-3 col-lg-6 my-2 form-group">
            Number Of Passenger:<input type="number" name="passenger" class="form-control" id="pax" required="required">
            @error('passenger')
            <p class="text-danger">Passenger is required</p>
            @enderror
          </div>
          <div class="offset-3 col-lg-6 my-2 form-group">
            Special Request:<textarea name="request"  class="form-control" placeholder="Type your another request in this box!.... .." id="description"></textarea>
            @error('request')
            <p class="text-danger">This field is required</p>
            @enderror
            <a href="{{route('bookcomfirm',$package->id)}}" class="btn btn-outline-info my-2 addtocart" data-name="{{$package->name}}" data-price="{{$package->price}}">Booking Now</a>
          </div>
        </form>

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
@section('script')
<script src="{{asset('frontend/script.js')}}"></script>
@endsection