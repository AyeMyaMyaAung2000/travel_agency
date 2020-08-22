@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="text-justify py-2">

		<h2>Hotel Create(Form)</h2>
		<form method="POST" action="{{ route('hotels.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-lg-5" style="padding-left: 200px">Name:</div>
				
				<div class="col-lg-7"><input type="text" name="name" class=" form-control my-2" value="">

					@error('name')
					<p class="text-danger">Hotel name is required</p>
					@enderror

				</div>
				
				<div class="col-lg-5" style="padding-left: 200px">Price:</div>
				<div class="col-lg-7"><input type="text" name="price" class=" form-control my-2" value="">

					@error('name')
					<p class="text-danger">Hotel price is required</p>
					@enderror

				</div>
				
				
				<div class="col-lg-5" style="padding-left: 200px">Photo:</div>
				<div class="col-lg-7"><input type="file" name="photo" class="form-control-file my-2"  value="">
					@error('photo')
					<p class="text-danger">Hotel photo is required</p>
					@enderror
				</div>
				
				<button type="submit" name="button" class="btn btn-primary my-2" style="margin-left: 200px;width: 150px">Create</button>
			</form>
		</div>
	</div>
</div>

@endsection