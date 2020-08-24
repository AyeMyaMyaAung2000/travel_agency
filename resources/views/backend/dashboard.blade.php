
@extends ('backendtemplate')
@section ('content')
<div id="content-wrapper" class="d-flex flex-column">

  <div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <div class="row">
        <div class="col-lg-12">
         <h1 class="h3 mb-0 " style="color:#5484a8;font-style: italic;text-align: center;">Lucky 7 Travel and Tour Agency</h1><hr>
       </div>
       <div class="col-lg-12 ">
        <img src="backend/images/agency.png" class=" img-fluid" height="30px;">
      </div>
    </div>
  </div>
</div>

<div class="container bg_img">
<div class="row">
  <div class="offset-3 col-lg-6 my-2">
    Interest Tour Package:<span style="color:blue;">ghj</span>
  </div>
  <div class="offset-3 col-lg-6 my-2 form-group"> 
    Choose Tour Type:
    <select name="category_id" class="form-control">
      <optgroup label="Choose one....." >
        @foreach($categories as $category)
        <option value="{{$category->id}}">
          {{$category->name}}
        </option>
        @endforeach
      </select>
    </optgroup>
  </div>

  <div class="offset-3 col-lg-6 my-2 form-group">
    Expected Date Of Arrival:<input type="date" name="depature_date" class="form-control" >
    @error('depature_date')
    <p class="text-danger">Depature date is required</p>
    @enderror
  </div>

  <div class="offset-3 col-lg-6 my-2 form-group">
    Number Of Passenger:<input type="number" name="passenger" class="form-control">
    @error('passenger')
    <p class="text-danger">Passenger is required</p>
    @enderror
  </div>
  <div class="offset-3 col-lg-6 my-2 form-group">
    Special Request:<textarea name="request"  class="form-control">Type your another request in this box!.... ..</textarea>
    @error('request')
    <p class="text-danger">This field is required</p>
    @enderror
    <a href="" class="btn btn-outline-info my-2">Booking Now</a>
  </div>

</div>
</div>

</div>


<!-- End of Main Content -->
@endsection