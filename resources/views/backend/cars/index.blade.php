@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block" style="text-align: center;">Car List(Table)</h2>
			<a href="{{ route('cars.create')}}" class="btn btn-success float-right">Add New</a>
		<table class="table" >
		<thead>
			
			<tr>
				<th>No</th>
				<th>Name</th>
				<th >Photo</th>
				<th >Price</th>
				<th colspan="ml-3">Actions</th>

			</tr>
		</thead>
		<tbody>
				@php $i=1; @endphp
				@foreach($cars as $car)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$car->name}}</td>
					<td><img src="{{asset($car->photo)}}" class="img-fluid" width="100px"></td>
					<td >{{$car->price}}</td>
					<td>
						<a href="{{ route ('cars.show',$car->id)}}">
						<span class="btn btn-warning" >Detail</span>
						</a>

						<a href="{{ route ('cars.edit',$car->id)}}"><button class="btn btn-warning">Edit</button></a>
						<form method="post" action="{{route('cars.destroy',$car->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
							@csrf
							@method('DELETE')
							<a href="" ><button class="btn btn-warning">Delete</button></a></td>
						</form>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
@endsection