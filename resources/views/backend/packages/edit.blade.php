@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<form method="POST" action="{{route('packages.update',$package->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">

			<div class="col-lg-5" style="padding-left: 200px">Name:</div>
			<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2"  value="{{$package->name}}">
				@error('name')
				<p class="text-danger">Package name is required</p>
				@enderror
			</div>
				
			<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
			<div class="col-lg-7"><img src="{{asset($package->photo)}}" width="50px;">
				<input type="file" name="photo" class="form-control-file my-2" >
				<input type="hidden" name="oldphoto" value="{{$package->photo}}">
			</div>

			<div class="col-lg-5" style="padding-left: 200px">Price:</div>
			<div class="col-lg-7"><input type="text" name="price" class=" form-control my-2"  value="{{$package->price}}">
				@error('name')
				<p class="text-danger">Package price is required</p>
					@enderror

			</div>

			<div class="col-lg-5" style="padding-left: 200px">Duration Time:</div>
			<div class="col-lg-7"><input type="text" name="duration_time" class=" form-control my-2"  value="{{$package->duration_time}}">
				@error('name')
				<p class="text-danger">Duration time is required</p>
					@enderror

			</div>

			<div class="col-lg-5 my-2" style="padding-left: 200px">Hotel_id:</div>
			<div class="col-lg-7 my-2">
					<select name="hotel_id" class="form-control">
						<optgroup label="Choose Hotel..." ></optgroup>
						@foreach($hotels as $hotel)
						<option value="{{$hotel->id}}"
							@if($hotel->id==$package->hotel_id)
							{{'selected'}}
							@endif
							>{{$hotel->name}}
						</option>

						@endforeach
					</optgroup>
				</select>
			</div>

			<div class="col-lg-5" style="padding-left: 200px">Car_id:</div>
			<div class="col-lg-7 my-2">
				<select name="car_id" class="form-control">
					<optgroup label="Choose Car.." >
						@foreach($cars as $car)
						<option value="{{$car->id}}"
							@if($car->id == $package->car_id)
							{{'selected'}}
							@endif

							>{{$car->name}}</option>

							@endforeach
						</optgroup>
					</select>
				</div>

				<div class="col-lg-5" style="padding-left: 200px">Category_id:</div>
				<div class="col-lg-7 my-2">
					<select name="category_id" class="form-control">
						<optgroup label="Choose Category" >
							@foreach($categories as $category)
							<option value="{{$category->id}}"
								@if($category->id == $package->category_id)
								{{'selected'}}
								@endif

								>{{$category->name}}</option>

								@endforeach
							</optgroup>
						</select>
					</div>


					<div class="col-lg-5" style="padding-left: 200px">Duration Description:</div>
					<div class="col-lg-7"><textarea name="description" class=" form-control my-2" >{{$package->description}}</textarea>
						@error('name')
						<p class="text-danger">Description is required</p>
						@enderror

					</div>

					<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Update</button>
				</form>
			</div>
		</div>
@endsection