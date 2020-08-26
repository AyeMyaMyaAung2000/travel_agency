@extends('frontendtemplate')
@section('carousel')
<div class="bg">	
</div>
@endsection
@section('welcome')
<div class="packagebg">
	<div class="container">
		<div class="row mb-3">
			<div class="offset-1 col-lg-2 col-md-2 col-sm-12 mt-3 ">
			<div class="row ">
				
					<div class="card ">
						<h4 class="text-center">Tours</h4>
						<ul>
							@foreach($categories as $category)
							<li>
								<a href="#" class="filter" data-id="{{$category->id}}"><i class="fab fa-gripfire"></i><h5>{{$category->name}}</h5></a>
							</li>
							@endforeach	
						</ul>
					</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-8 " id="myItems">
			
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
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});	
		showItems(0);
		function showItems(id)
		{
			$.post("{{route('getitems')}}",{sid:id},function(res){
				var html='';
				console.log(res);
				$.each(res,function(i,v){
					var url='/holiday1/'+v.id;
					html+=`
					<div class="card mt-3 packages" data-aos="fade-up" data-aos-duration="700">
					<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 ">
					<img src="${v.photo}" width="450px" height="300px" class="img-fluid"></div>
					<div class="col-lg-6 col-md-12 col-sm-12 text-left">
					<h4 class="py-3  px-3">${v.name}</h4>
					<p><i class="fas fa-location-arrow px-2 arr text-warning"></i>${v.name}</p>
					<hr class="p-0 m-0">
					<p><i class="far fa-clock px-2 text-warning"></i>  Duration: ${v.duration_time}</p>
					<hr class="p-0 m-0">
					<p><i class="fas fa-dollar-sign px-2 text-warning m-0"></i>
					Price: $<span style="color:red"> ${v.price}</span>
					<a href="${url}" class="btn text-light mx-5  px-3  button">Detail</a></p>
					<hr class="p-0 m-0">
					</div>
					</div>
	
					</div>`
				});
				$('#myItems').html(html);
			})
		}
		$('.filter').click(function(){
			var id=$(this).data('id');
			showItems(id);
		})	
	});	
</script>
<script type="text/javascript" src="{{asset('frontend/script.js')}}"></script>	
</script>
@endsection