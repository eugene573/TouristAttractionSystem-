@extends('layout')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <br>
        <h3>Create New Place Here</h3>
        <br>
        <form action="{{ route('addPlace') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="placeName">Place Name</label>
                <input type="text" class="form-control" id="placeName" name="placeName">                
            </div>
            <div class="form-group">
                <label for="placeReviews">Place Reviews</label>
                <input type="text" class="form-control" id="placeReviews" name="placeReviews">                
            </div>
            <div class="form-group">
                <label for="placeIntroduction">Place Introduction</label>
                <input type="text" class="form-control" id="placeIntroduction" name="placeIntroduction">                
            </div>
            <div class="form-group">
                <label for="placeNearByArea">Near By Area</label>
                <input type="text" class="form-control" id="placeNearByArea" name="placeNearByArea">                
            </div>
            <div class="form-group">
                <label for="placePrice">Place Price</label>
                <input type="text" class="form-control" id="placePrice" name="placePrice">                
            </div>
            <div class="form-group">
                <label for="placeImage1">Place Image 1</label>
                <input type="file" class="form-control" id="placeImage1" name="placeImage1">                
            </div>
            <div class="form-group">
                <label for="placeImage2">Place Image 2</label>
                <input type="file" class="form-control" id="placeImage2" name="placeImage2">                
            </div>
            <div class="form-group">
                <label for="placeImage3">Place Image 3</label>
                <input type="file" class="form-control" id="placeImage3" name="placeImage3">                
            </div>
            <div class="form-group">
                <label for="placeImage4">Place Image 4</label>
                <input type="file" class="form-control" id="placeImage4" name="placeImage4">                
            </div>
            <div class="form-group">
                <label for="placeImage5">Place Image 5</label>
                <input type="file" class="form-control" id="placeImage5" name="placeImage5">                
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
                <input type="text" class="form-control" id="placeAddress" name="placeAddress">                
            </div> 

             <div class="form-group">
                <label for="placeOpenHour">Place Open Hour</label>
                <input type="text" class="form-control" id="placeOpenHour" name="placeOpenHour">
            </div> 
            
            <div class="form-group">
                <label for="placeBookingMethod">Place Booking Method</label>
                <input type="text" class="form-control" id="placeBookingMethod" name="placeBookingMethod">                
            </div>

            <div class="form-group">
                <label for="placeContactNumber">Place Contact Number</label>
                <input type="text" class="form-control" id="placeContactNumber" name="placeContactNumber">                
            </div>

            <div class="form-group">
            <label for="placeMap">Place Map</label>
                   <input type="text" class="form-control" id="placeMap" name="placeMap">                
            </div>
            <br>
             <button type="submit" class="btn btn-Primary" onClick="return alert('Place has been added successfully!')">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection