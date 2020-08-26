@extends('frontendtemplate')
@section('carousel')
<div class="bg">	
</div>
@endsection
@section('welcome')
<div class="packagebg">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-12 col-sm-12 mt-3 ">
			<div class="row ">
				<div class="col-lg-12">
					<div class="card ">
						<h4 class="text-center">Categories</h4>
						<ul>
							@foreach($categories as $category)
							<li>
								<a href="#" class="list-group-item filter" data-id="{{$category->id}}">{{$category->name}}</a>
							</li>
							@endforeach	
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="myItems">
			
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

		function showItems(id){
			$.post("{{route('getitems')}}",{sid:id},function(res){
				var html='';
				$.each(res,function(i,v){
					alert(res);
					var url='/itemdetail/'+v.id;
					html+=`<div class="col-lg-4 col-md-6 mb-4">
					<div class="card h-100">
					<a href="#"><img class="card-img-top img-fluid" src="${v.photo}"></a>
					<div class="card-body">
					<h5 class="card-title">
					<a href="#">${v.name}</a>
					</h5>
					<h5>${v.price}</h5>
					<h5>${v.discount}</h5>
					<p class="card-text">${v.description}</p>
					</div>
					<div class="card-footer">
					<a href="#" class="btn btn-primary btn-sm addtocart" data-id="${v.id}" data-name="${v.name}" data-photo="${v.photo}" data-price="${v.price}"data-discount="${v.discount}">

					Add to cart</a>
					<a href="${url}" class="btn btn-info btn-sm">Detail</a>
					</div>
					</div>
					</div>`
				});
				$('#myItems').html(html);
			});
		}
		$('.filter').click(function(){
			var id=$(this).data('id');
			showItems(id);
		});
		
	});	


</script>
<script type="text/javascript" src="{{asset('frontend/script.js')}}"></script>	
</script>
@endsection