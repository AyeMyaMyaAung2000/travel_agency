@extends('frontendtemplate')
@section('welcome')
<div class="container">
	 <img src="{{asset('https://nouranmedia.com/wp-content/uploads/2018/11/contact_us_banner1-1.jpg')}}" width="100%">
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
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div class="container my-5">
	<h1 class="text-center">Contact Us</h1>

		<div class="row">
			<div class="col-md-6">
				
				<div class="row">
					<img src="{{asset('frontend/img/contact.jpg')}}" class="img-fluid w-75">
				</div>
			</div>
			<div class="col-md-6 my-5" style="border-style: solid;border-radius: 10px;border-color: #255285;">
				<h1 class="form1">Send a message</h1>
				<form enctype="multipart/form-data" >
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
							<i class="fas fa-user-friends" style="color:#a4a9eb;">Name: 
							</i>
							</div>
						</div>
						<div class="col-lg-8">
						<div class="form-group">	
							<input type="text" name="name"placeholder="Enter your name!" class="form-control">
						</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
							<i class="fas fa-envelope-open-text" style="color:#a4a9eb;">Email: 
							</i>
							</div>
						</div>
						<div class="col-lg-8">
						<div class="form-group">	
							<input type="text" name="name"placeholder="Enter your email" class="form-control">
						</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
							<i class="fas fa-phone" style="color:#a4a9eb;">Phone-No: 
							</i>
							</div>
						</div>
						<div class="col-lg-8">
						<div class="form-group">	
							<input type="text" name="name"placeholder="Enter your phone number!" class="form-control">
						</div>
						</div>
						<div class="col-lg-12">
						
							<div class="form-group">
							<textarea cols="40" placeholder="Enter a message!" style="color:#a4a9eb;" class="form-control"></textarea>
							
							</div>
						</div>
					
					<div class="form-group">
						<a href="" class="btn float-right" style="color:white;background-color:#a4a9eb ">Submit</a>
					</div>
				</div>
			</div>
				</form>

			</div>

	</div>
</div>
<div class="container">
		<div class="row">
			<div class="container py-5">
				<h3 class="form1 text-center"> LOCATION</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14799.915355808022!2d96.08951882233195!3d21.973775216896637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x702c045d64c49b4f!2sRoyal%20Star%20Restaurant!5e0!3m2!1smy!2smm!4v1595054216390!5m2!1smy!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>

<!-- end of page indicator -->
	@endsection

	<script type="text/javascript">
 $(".mydate").datepicker({
       format:'yyyy-mm-dd',
       autoclose: true
   });
    $(".flexslider").flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: true,
        directionNav: false,
        slideshow: true,
        slideshowSpeed: 5000
    });
</script>

<script language="javascript">
        $(document).ready(function () {
            $("#txtworkingdays").datepicker({
                beforeShowDay: $.datepicker.noWeekends
            });
        });
    </script>