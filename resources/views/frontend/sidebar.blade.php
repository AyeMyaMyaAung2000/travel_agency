<div class="col-md-2 border">

	<h3 class="my-4">category</h3>
	<div class="list-group">

		@foreach($categories as $category)
		<a href="#" class="list-group-item filter" data-id="{{$category->id}}">{{$category->name}}</a>
		@endforeach
	</div>

</div>