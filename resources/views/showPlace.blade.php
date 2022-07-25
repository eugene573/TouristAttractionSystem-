@extends('layout')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td><h5 style="font-weight-bold black-text">ID</h5></td>
                        <td><h5 style="font-weight-bold black-text">Image 1-5</h5></td>
                        <td><h5 style="font-weight-bold black-text">Place Name</h5></td>
                        <td><h5 style="font-weight-bold black-text">Reviews</h5></td>
                        <td><h5 style="font-weight-bold black-text">Price</h5></td>
                        <td><h5 style="font-weight-bold black-text">Introduction</h5></td>
                        <td><h5 style="font-weight-bold black-text">Near By Area</h5></td>
                        <td><h5 style="font-weight-bold black-text">Category</h5></td>
                        <td><h5 style="font-weight-bold black-text">Open Hour</h5></td>
                        <td><h5 style="font-weight-bold black-text">Address</h5></td>
                        <td><h5 style="font-weight-bold black-text">Booking Method</h5></td>
                        <td><h5 style="font-weight-bold black-text">Contact Number</h5></td>
                        <td><h5 style="font-weight-bold black-text">Map</h5></td>
                        <td><h5 style="font-weight-bold black-text">Action</h5></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($places as $place)
                    <tr>
                        <td><h4 style="color:blue">{{$place->id}}</h4></td>
                        <td><img src="{{ asset('images/') }}/{{$place->image1}}" width="100" class="img-fluid" alt="">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('images/') }}/{{$place->image2}}" width="100" class="img-fluid" alt="">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('images/') }}/{{$place->image3}}" width="100" class="img-fluid" alt="">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('images/') }}/{{$place->image4}}" width="100" class="img-fluid" alt="">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('images/') }}/{{$place->image5}}" width="100" class="img-fluid" alt="">
                        </td>
                        <td>{{$place->name}}</td>
                        <td>{{$place->reviews}}</td>
                        <td>{{$place->price}}</td>
                        <td>{{$place->introduction}}</td>
                        <td>{{$place->nearByArea}}</td>
                        <td>{{$place->catName}}</td>
                        <td>{{$place->openHour}}</td>
                        <td>{{$place->address}}</td>
                        <td>{{$place->bookingMethod}}</td>
                        <td>{{$place->contactNumber}}</td>
                        <td>{{$place->map}}</td>
                        <td><a href="{{ route('editPlace',['id'=>$place->id])}}" class="btn btn-success btn-xs">Edit</a>  <br> <br>
                         <a href="{{ route('deletePlace',['id'=>$place->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-1"></div>
</div>
@endsection