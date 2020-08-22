@extends('backendtemplate')

@section('content')
	
<div class="container-fluid">
	<div class="text-justify py-2">

		<form method="POST" action="{{ route('cars.update',$car->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"  value="{{$car->name}}">
					@error('name')
					<p class="text-danger">Your name is required</p>
					@enderror
						
				</div>
				
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><img src="{{asset($car->photo)}}" width="50px;">
				<input type="file" name="photo" class="form-control-file my-2" >
				<input type="hidden" name="oldphoto" value="{{$car->photo}}"></div>

				<div class="col-lg-5" style="padding-left: 200px">Price:</div>
				<div class="col-lg-7"><input type="text" name="price" class=" form-control my-2"  value="{{$car->price}}">
					@error('name')
					<p class="text-danger">Your name is required</p>
					@enderror
						
				</div>

				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Update</button>
			</form>
	</div>
</div>
@endsection