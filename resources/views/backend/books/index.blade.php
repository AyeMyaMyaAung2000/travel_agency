@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2 class="d-inline-block">Booking List(Table)</h2>
	{{-- <a href="{{ route('subcategories.create')}}" class="btn btn-success float-right">Add New</a> --}}
	<table class="table" >
		<thead>
			<tr>
				<th>No</th>
				<th>Departure Date</th>
				<th>Voucherno</th>
				<th>Passenger</th>
				<th>Note</th>
				<th>Status</th>
				<th>Total</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			
			@php $i=1; @endphp
			@foreach($books as $book)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$book->depature_date}}</td>
				<td>{{$book->voucherno}}</td>
				<td>{{$book->passenger}}</td>
				<td >{{$book->note}}</td>
				<td >{{$book->status}}</td>
				<td >{{$book->total}}</td>
				<td><a href="{{ route ('books.show',$book->id)}}"><button class="btn btn-primary">Detail</button></a>

					<form method="post" action="{{route('books.destroy',$book->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-danger">
					</form></td>
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
</div>
@endsection