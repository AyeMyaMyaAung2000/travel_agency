@extends('frontendtemplate')
@section('welcome')
<div class="container">
	<div class="row">
		<div class="offset-md-1 col-md-10">
			{!!$package->description!!}
		</div>
	</div>
</div>

	

<!-- end of page indicator -->
	@endsection