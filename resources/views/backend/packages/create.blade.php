@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<h2 style="text-align: center;">Package Create(Form)</h2>
		<form method="POST" action="{{route('packages.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">

				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2">
					@error('name')
					<p class="text-danger">Package name is required</p>
					@enderror
				</div>

				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><input type="file" name="photo" class="form-control-file my-2" >
					@error('photo')
					<p class="text-danger">Photo is required</p>
					@enderror
				</div>

				<div class="col-lg-5" style="padding-left: 200px">Price:</div>
				<div class="col-lg-7"><input type="number" name="price" class="my-2 form-control">
					@error('price')
					<p class="text-danger">Package price is required</p>
					@enderror
				</div>

				<div class="col-lg-5" style="padding-left: 200px">Duration_Time:</div>
				<div class="col-lg-7"><input type="number" name="duration_time" class="form-control my-2" >

					@error('duration_time')
					<p class="text-danger">Duration time is required</p>
					@enderror
				</div>

				<div class="col-lg-5 my-2" style="padding-left: 200px">Hotel_id:</div>
				<div class="col-lg-7 my-2">
					<select name="hotel_id" class="form-control">
						<optgroup label="Choose Hotel....." >
							@foreach($hotels as $hotel)
							<option value="{{$hotel->id}}">{{$hotel->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="col-lg-5 my-2" style="padding-left: 200px">Car_id:</div>
					<div class="col-lg-7 my-2">
						<select name="car_id" class="form-control">
							<optgroup label="Choose Car......" ></optgroup>
							@foreach($cars as $car)
							<option value="{{$car->id}}">{{$car->name}}</option>

							@endforeach
						</select>
					</div>

					<div class="col-lg-5 my-2" style="padding-left: 200px">Category_id:</div>
					<div class="col-lg-7 my-2">
						<select name="category_id" class="form-control">
							<optgroup label="Choose Category....." ></optgroup>
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="col-lg-5 my-2" style="padding-left: 200px">Description:</div>
					<div class="col-lg-7">
						<textarea name="description" class="form-control my-2"></textarea>
						@error('description')
						<p class="text-danger">Description is required</p>
						@enderror
					</div>


					<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
				</form>
			</div>
		</div>

	</div>
@endsection