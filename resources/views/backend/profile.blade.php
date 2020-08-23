@extends('backendtemplate')

@section('content')
<div class="container col-lg-9" style="background-color: #7a998e;color: black;">
	<div class="row">
		<div class="col-lg-12" style="font-size:25px;">
			<p style="margin-left: 450px">Name:<strong >{{Auth::user()->name}}</strong></p>
			<p style="margin-left: 450px;">Email:<strong>{{Auth::user()->email}}</strong></p>
		</div>
		<div class="col-lg-12 h-25">
			<img src="backend/images/agency.png" class=" img-fluid" height="30px;">
		</div>
		
	</div>
</div>

@endsection