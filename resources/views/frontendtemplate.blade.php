<!DOCTYPE html>
<html>
<head>
  <title>travel</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('frontend/dist/aos.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick-theme.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
  
</head>
<body>


  <!-- navigation bar -->
  
  <nav class="navbar navbar-expand-lg m-0 menu" id="scroll">
    <div class="container-fluid">

      <img src="frontend/img/pjlogo.png" class="img-fluid " width="150">
      <button class="navbar-toggler p-0" data-toggle="collapse" data-target="#mainMenu">
        <i class="fas fa-sliders-h button"></i>     
      </button>

      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item colo mx-2 px-3"><a href="{{route('home')}}" class="nav-link">HOME</a></li>
          <li class="nav-item  mx-2 mt-2">
            <div class="dropright">
              <a  href="#" id="menu" class="dropright ">
                Tour Program<i class="fas fa-angle-double-right"></i>
              </a>

              <div class="dropdown-menu" >
                @foreach($categories as $category)
                <a class="dropdown-item" href="{{route('packages',$category->id)}}">{{$category->name}}</a>
                @endforeach
              </div>
            </div>

          </li>
          <li class="nav-item  mx-2 px-2"><a href="about1.html" class="nav-link px-2">ABOUT</a></li>
          <li class="nav-item  mx-2 px-3"><a href="contact.html" class="nav-link">CONTACT</a></li>
          <div class="view-detail" data-target="#checkModal" data-toggle="modal">

          </div>
        </ul>
        <div class="animation"></div>
      </div>

    </div>
  </nav>

  <!-- endofnavigation -->
  <!-- start carousel -->
 @yield('carousel')
  <!-- slider_area_end -->
  <!-- page indicator -->
  @yield('pageindicator')
  <!-- end of page indicator -->
  <!-- search section -->

  @yield('search')
  <!-- end of search section -->
 @yield('welcome')

  <!-- end of search section -->
 @yield('itemcarousel')
<!-- testing2 -->
<div class="content">
  <div class="container">
    <div class="row p-1">
      <div class="col-md-1">
        <img src="frontend/img/logo.png" class="img-fluid">
      </div>
      <div class="col-md-4">
       <h4>Contact Info</h4>
       <p><i class="fas fa-home text-warning"></i>78th Street,30x31,Mandalay
       </p>
       <p><i class="fas fa-phone-alt text-warning"></i>(+95) 09 403 532 345</p>
       <p><i class="fab fa-viber text-warning"></i> viber: +959440369876</p>
       <p><i class="far fa-envelope text-warning"></i>Info@myanmartravel.com</p>
     </div>
     <div class="col-md-4 pl-0">
       <h4>We accept</h4>
       <div class="row">
        
         <div class="col-md-8">
           <img src="frontend/img/cbbank.png" class="img-fluid">
         </div>
         <div class="col-md-5">
           <img src="frontend/img/visa1.png" class="img-fluid w-50">
         </div>
          <div class="col-md-4">
           <img src="frontend/img/kbzpay.png" class="img-fluid w-50">
         </div>
       </div>
     </div>
     <div class="col-md-3 mt-5">
     </div>
   </div>
 </div>
</div>
<!-- social -->
<!-- footer -->
<footer class="footer">
  <div class="container text-light text-center text-dark text-monospace">
    <p class="footertext m-0">Copyright &copy; All Right Result | Powered By Web-Design-2020 </p>
  </div>
</footer>
<!-- end footer -->

<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/dist/aos.js')}}"></script>

<script>
  AOS.init({
    easing: 'ease-in-out-sine',
    duration: 700,
    delay:250,
  });
</script>
<script >

  var prescroll= window.pageYOffset;
  window.onscroll = function() {

    var currentScroll = window.pageYOffset;
    if (prescroll>currentScroll) {
      document.getElementById("scroll").style.top = "0";
    } else {
      document.getElementById("scroll").style.top = "-100px";
    }
    prescroll= currentScroll;

  }
</script>

<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
    $('.itemcarousel').slick({
      dots: false,
      autoplay:true,
      autoplaySpeed:1500,


      slidesToShow: 4,
      slidesToScroll: 1,
      touchMove: false,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });

  });
  
</script>
</body>
</html>