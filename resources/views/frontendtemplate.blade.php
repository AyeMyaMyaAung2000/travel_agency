
<!DOCTYPE html>
<html lang="en">
<head>
  <title>travel</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('frontend/dist/aos.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick-theme.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
  {{-- new --}}
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  {{-- date --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css" />
  

</head>
<body>


  <!-- navigation bar -->

  <nav class="navbar navbar-expand-lg menu" id="scroll">
    <div class="container">
      <a href="{{route('index')}}" style="color: #c9b779">
        <img src="{{asset('frontend/img/newlogo.png')}}" class="img-fluid " width="70">Travel Agency</a>
        <button class="navbar-toggler p-0" data-toggle="collapse" data-target="#mainMenu">
          <i class="fas fa-sliders-h button"></i>     
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item colo mx-1 px-2"><a href="{{route('index')}}" class="nav-link">Home</a></li>
            <li class="nav-item  mx-2 mt-2">
              <div class="dropdown">
                <a  href="#" id="menu" class="dropdown mx-1 px-3">
                  Tour Program&nbsp;<i class="fas fa-angle-down"></i>
                </a>

                <div class="dropdown-menu" >
                  @foreach($categories as $category)
                  <a class="dropdown-item" href="{{route('packages',$category->id)}}">{{$category->name}}</a>
                  @endforeach
                </div>
              </div>

            </li>

            <li class="nav-item  mx-1 px-2"><a href="about1.html" class="nav-link px-2">About</a></li>
            <li class="nav-item  mx-1 px-2"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>




            <li class="nav-item">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
                  @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <a href="{{route('profile')}}" class="dropdown-item" >Profile</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
                @endguest
              </ul>
            </div>
          </li>
         {{--  <div class="view-detail" data-target="#checkModal" data-toggle="modal">

          </div> --}}
        </ul>
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
    <div class="container mt-5">
      <div class="row p-1" >
        <div class="col-md-1">
          <img src="{{asset('frontend/img/logo (1).png')}}" class="img-fluid">
        </div>
        <div class="col-md-4">
         <h4>Contact Info</h4>
         <p><i class="fas fa-home" style="color: #c9b779"></i>78th Street,30x31,Mandalay
         </p>
         <p><i class="fas fa-phone-alt" style="color: #c9b779"></i>(+95) 09 403 532 345</p>
         <p><i class="fab fa-viber" style="color: #c9b779"></i> viber: +959440369876</p>
         <p><i class="far fa-envelope" style="color: #c9b779"></i>Info@myanmartravel.com</p>
       </div>
       <div class="col-md-4 pl-0">
         <h4>We accept</h4>
         <div class="row">

           <div class="col-md-8">
             <img src="{{asset('frontend/img/cbbank.png')}}" class="img-fluid">
           </div>
           <div class="col-md-5">
             <img src="{{asset('frontend/img/visa1.png')}}" class="img-fluid w-50">
           </div>
           <div class="col-md-4 p-0">
             <img src="{{asset('frontend/img/kbzpay.png')}}" class="img-fluid w-50">
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-12 px-3 ">


        <h4>Follow- Us</h4>
        <a href="https://www.facebook.com/" title="facebook"><i class="fab fa-facebook fa-2x social p-2 " style="color: #102942"></i></a>


        <a href="https://www.twitter.com/" title="twitter"><i class="fab fa-twitter fa-2x social p-2" style="color: #102942"></i>
        </a>

        <a href="https://www.instagram.com/" title="instagram"> <i class="fab fa-instagram-square fa-2x social p-2" style="color: #102942"></i></a>
        <h4>Connect With</h4>
        <p>
          <span style="color: #c9b779">Viber</span>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+95973142990<br>
          <span style="color: #c9b779">Wechat</span>: &nbsp;&nbsp; wxid_fk98temy1go722<br>
          <span style="color: #c9b779">Whatsapp</span>:+9595115371<br>
          <span style="color: #c9b779">Line</span>:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +9595115371<br>

        </p>

      </div>
    </div>
  </div>
</div>

<!-- social -->
<!-- footer -->
<footer class="footer p-1">
  <div class="container text-light text-center text-dark text-monospace">
    <p class="footertext m-0">Copyright &copy; All Right Result | Powered By Web-Design-2020 </p>
  </div>
</footer>
<!-- end footer -->

<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/dist/aos.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('script')

<script>
  AOS.init({
    easing: 'ease-in-out-sine',
    duration: 700,
    delay:250,
  });
</script>
{{-- <script >

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
</script> --}}

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