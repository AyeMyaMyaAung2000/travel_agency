@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2 class="d-inline-block">Booking Detail</h2>
	  <div class="container ">
		<div class="row">
			<div class="offset-md-1 col-md-10">
				<div class="table-responsive">
					<table class="table table-bordered bg-white shadow">

						<tr>
								<th colspan="3">User</th>
								<td colspan="3">{{$booking_detail->user->name}}</td>
						</tr>
						<tr>
								<th colspan="3">Email</th>
								<td colspan="3">{{$booking_detail->user->email}}</td>
						</tr>
						<tr>
								<th colspan="3">Phone Number</th>
									<td colspan="3">{{$booking_detail->voucherno}}</td>
						</tr>
						<tr>
								<th colspan="3">Depature</th>
									<td colspan="3">{{$booking_detail->depature_date}}</td>
						</tr>


						<tr>
							
							
							<th>Passenger</th>
							
							<th>Total</th>
							<th>Car Name</th>
							<th>Hotel Name</th>
							<th>Package Name</th>
							
					</tr>
						
						<tr>
					
							<td>{{$booking_detail->passenger}}</td>
							
							<td>{{$booking_detail->total}}</td>
							
							<td>{{$booking_detail->package->car->name}}</td>
							<td>{{$booking_detail->package->hotel->name}}</td>
							<td>{{$booking_detail->package->name}}</td>

							</tr>
							<tr>
								<td>Note</td>
								<td colspan="5">{{$booking_detail->note}}</td>
							</tr>
							
							

						</table>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection