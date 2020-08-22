@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Hotel List(Table)</h2>
			<a href="{{ route('hotels.create')}}" class="btn btn-success float-right">Add New</a>
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
				@foreach($hotels as $hotel)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$hotel->name}}</td>
					<td><img src="{{asset($hotel->photo)}}" class="img-fluid" width="100px"></td>
					<td >{{$hotel->price}}</td>
					<td>
						<a href="{{ route ('hotels.show',$hotel->id)}}">
						<span class="btn btn-warning" >Detail</span>
						</a>

						<a href="{{ route ('hotels.edit',$hotel->id)}}"><button class="btn btn-warning">Edit</button></a>
						<form method="post" action="{{route('hotels.destroy',$hotel->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
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