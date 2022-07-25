@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Place</h3>
        <form action="{{ route('updatePlace') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($places as $place)
            <div class="form-group">
                <label for="placeName">Place Name</label>
                <input type="text" class="form-control" id="placeName" name="placeName" value="{{$place->name}}"> 
                <input type="hidden" name="placeID" id="placeID" value="{{$place->id}}">               
            </div>
            <div class="form-group">
                <label for="placeIntroduction">Place Introduction</label>
                <input type="text" class="form-control" id="placeIntroduction" name="placeIntroduction" value="{{$place->introduction}}" >                
            </div>
            <div class="form-group">
                <label for="placeNearByArea">Near By Area</label>
                <input type="text" class="form-control" id="placeNearByArea" name="placeNearByArea" value="{{$place->nearByArea}}" >                
            </div>
            <div class="form-group">
                <label for="placePrice">Place Price</label>
                <input type="text" class="form-control" id="placePrice" name="placePrice" value="{{$place->price}}">                
            </div>
              <div class="form-group">
                <label for="placeOpenHour">Open Hour</label>
                <input type="text" class="form-control" id="placeOpenHour" name="placeOpenHour" value="{{$place->openHour}}">             
            </div> 
            <div class="form-group">
                <label for="placePrice">Place Reviews</label>
                <input type="text" class="form-control" id="placeReviews" name="placeReviews" value="{{$place->reviews}}">                
            </div>
            <div class="form-group">
                <label for="placeDescription">Place Image 1</label>
                &nbsp; &nbsp;
                <img src="{{asset('images')}}/{{$place->image1}}" alt="" class="img-fluid" width="100">
                <br>
                <br>
                <input type="file" class="form-control" id="placeImage1" name="placeImage1" value="">                
            </div>
            <br>
            <div class="form-group">
                <label for="placeDescription">Place Image 2</label>
                &nbsp; &nbsp;
                 <img src="{{asset('images')}}/{{$place->image2}}" alt="" class="img-fluid" width="100"> 
                 <br>
                 <br>
                <input type="file" class="form-control" id="placeImage2" name="placeImage2" value="">                
            </div>
            <br>
            <div class="form-group">
                <label for="placeDescription">Place Image 3</label>
                &nbsp; &nbsp;
                <img src="{{asset('images')}}/{{$place->image3}}" alt="" class="img-fluid" width="100">
                <br>
                <br>
                <input type="file" class="form-control" id="placeImage3" name="placeImage3" value="">                
            </div>
            <br>
            <div class="form-group">
                <label for="placeDescription">Place Image 4</label>
                &nbsp; &nbsp;
                <img src="{{asset('images')}}/{{$place->image4}}" alt="" class="img-fluid" width="100">
                <br>
                <br>
                <input type="file" class="form-control" id="placeImage4" name="placeImage4" value="">                
            </div>
            <br>
            <div class="form-group">
                <label for="placeDescription">Place Image 5</label>
                &nbsp; &nbsp;
                <img src="{{asset('images')}}/{{$place->image5}}" alt="" class="img-fluid" width="100">
                <br>
                <br>
                <input type="file" class="form-control" id="placeImage5" name="placeImage5" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>                
            </div>
            <div class="form-group">
                <label for="placeAddress">Place Address</label>
                <input type="text" class="form-control" id="placeAddress" name="placeAddress" value="{{$place->address}}" >                
            </div>
            <div class="form-group">
                <label for="placeBookingMethod">Place Booking Method</label>
                <input type="text" class="form-control" id="placeBookingMethod" name="placeBookingMethod" value="{{$place->bookingMethod}}" >                
            </div>
            <div class="form-group">
                <label for="placeContactNumber">Place Contact Number</label>
                <input type="text" class="form-control" id="placeContactNumber" name="placeContactNumber" value="{{$place->contactNumber}}" >                
            </div>
            <div class="form-group">
                <label for="placeMap">Place Map</label>
                <input type="text" class="form-control" id="placeMap" name="placeMap" value="{{$place->map}}" >                
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary" onClick="return alert('Place has been updated successfully!')">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection