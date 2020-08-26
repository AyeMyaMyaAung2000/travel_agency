@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	<h2 class="d-inline-block">Package List(Table)</h2>
	<a href="{{ route('packages.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table" >
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th >Photo</th>
				<th>Price</th>
				<th>Duration_Time</th>
				<th>Actions</th>
				<th >Description</th>

			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($packages as $package)

			<tr>
				<td>{{$i++}}</td>
				<td>{{ $package->name}}</td>
				<td><img src="{{asset($package->photo)}}" width="150px;"height="100px;"></td>
				<td>{{$package->price}}</td>
				<td>{{$package->duration_time}}</td>
				
				<td>
					<a href="{{ route ('packages.show',$package->id)}}">
						<span class="btn btn-primary" >Detail</span>
					</a>
						<a href="{{ route ('packages.edit',$package->id)}}"><button class="btn btn-warning">Edit</button></a>

					<form method="post" action="{{route('packages.destroy',$package->id)}}" onsubmit="return confirm('Are you sure delete?')" class="d-inline-block">	
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>
				<td>{{$package->description}}</td>

			</tr>

			@endforeach
		</tbody>
	</table>
</div>

@endsection