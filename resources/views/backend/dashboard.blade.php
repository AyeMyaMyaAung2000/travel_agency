
@extends ('backendtemplate')
@section ('content')

<div class="container">
  <h2 style="text-align:center;">About Us</h2>
  <div class="row">
    <div class="col-lg-6">
      <img src="{{asset('backend/images/travel1.jpg')}}" width="100%" height="100%">
    </div>
    <div class="col-lg-6">
      <p>Lucky 7 Travel and Tour Agency started its business in 2020 just this years before the official visit Myanmar year.Our agency is assisted by highly skilled people and is a well-recognized destination management company focusing on customer service with Care, Empathy and Hospitality. We have our experienced staff members at Yangon office working towards the same goal of customer satisfaction! Our star guides take excellent care on customers and provide rich background information to enhance traveler’s experiences.Lucky 7 has extensive network with the local suppliers and has earned for total reliability with excellent services.</p>
    </div>
  </div>
  

  <h2 style="text-align: center">Minglarpar!</h2>
  
  <img src="{{asset('https://i.ytimg.com/vi/IDIWddL3Gx4/maxresdefault.jpg')}}" width="100%" height="100%">
  <h2 style="text-align: center;">Creator Member</h2>
  <div class="row"> 

    <div class="col-lg-6">
      <img src="{{asset('backend/images/hotel5.jpg')}}" width="50%" class="img-fluid" style="border-radius: 100px;"><br>
      <p class="my-2">Name:Khant Zaw Lat</p>
      <i class="fas fa-envelope-open-text my-2">&nbsp;&nbsp;Email:khant@gmail.com</i><br>
    </div>
    <div class="col-lg-6">
      <img src="{{asset('backend/images/hotel5.jpg')}}" width="50%" class="img-fluid" style="border-radius: 100px;"><br>
      <p class="my-2">Name:Aye Mya Mya Aung</p>
      <i class="fas fa-envelope-open-text">&nbsp;&nbsp;Email:khant@gmail.com</i><br>
    </div>
  </div>
  <h1 style="text-align: center;margin-top: 20px;">Our service</h1>
  <div class="row">
    <div class="col-lg-6">
      <h3 style="text-align: center;"><i class="fas fa-car">Car Rent</i></h3>
      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('backend/images/car5.jpg')}}" width="200%" height="120%" style="border-radius: 20px;">
        </div>


      </div>
    </div>
    <div class="col-lg-6">
      <h3 style="text-align: center;"><i class="fas fa-hotel">Hotel Rent</i></h3>
      <div class="row">
        <div class="col-lg-6">
          <img src="{{asset('backend/images/hotel5.jpg')}}" width="200%" style="border-radius: 20px;">
        </div>
      </div>
    </div>
  </div>

</div>
</div>

  <!-- End of Main Content -->
  @endsection