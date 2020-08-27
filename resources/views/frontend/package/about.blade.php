@extends('frontendtemplate')
@section('welcome')
<div class="container-fluid">
   <img src="{{asset('backend/images/travel1.jpg')}}" width="100%" height="400px;">
   <h2 style="text-align:center;">About Us</h2>
  <div class="row">
    <div class="col-lg-12 my-4">
           <p>&nbsp;&nbsp;&nbsp;&nbsp;Lucky 7 Travel and Tour Agency started its business in 2020 just this years before the official visit Myanmar year.Our agency is assisted by highly skilled people and is a well-recognized destination management company focusing on customer service with Care, Empathy and Hospitality. We have our experienced staff members at Yangon office working towards the same goal of customer satisfaction! Our star guides take excellent care on customers and provide rich background information to enhance traveler’s experiences.Lucky 7 has extensive network with the local suppliers and has earned for total reliability with excellent services.</p>
    </div>
   {{--  <div class="col-lg-6">
       <img src="{{asset('backend/images/travel1.jpg')}}" width="100%">

    </div> --}}
  </div>
  <h2 style="text-align:center;">Creator Member</h2>
  <div class="row">
      <div class="col-lg-3 ">
      <img src="{{asset('backend/images/hotel5.jpg')}}" class="img-fluid">
    </div>
    <div class="col-lg-3">
      <p class="my-2">Name:Khant Zaw Lat</p>
      <p><i class="fas fa-envelope-open-text my-2">&nbsp;&nbsp;Email:khant@gmail.com</i></p>
    </div>
    <div class="col-lg-3">
      <img src="{{asset('backend/images/2.jpg')}}" class="img-fluid profile">
    </div>
    <div class="col-lg-3">
      <p class="my-2">Name:Aye Mya Mya Aung</p>
      <i class="fas fa-envelope-open-text">&nbsp;&nbsp;Email:khant@gmail.com</i>
    </div>
    </div>
 
  <h1 style="text-align: center;margin-top: 20px;">Our service</h1>
  <div class="row">
  
  <div class="col-lg-6">
      <h3 style="text-align: center;"><i class="fas fa-car my-3">Car Rent</i></h3>     
          <img src="{{asset('backend/images/car5.jpg')}}" style="border-radius: 20px;" width="100%" height="75%">
     </div>
      <div class="col-lg-6">
        <h3 style="text-align: center;"><i class="fas fa-hotel">Hotel Rent</i></h3>
     <img src="{{asset('backend/images/hotel5.jpg')}}" style="border-radius: 20px;" width="100%" height="82%">
        </div>
      </div>
    </div>
 @endsection