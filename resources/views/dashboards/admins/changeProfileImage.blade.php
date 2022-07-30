@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Change Your Profile Image Here</h3>
        <form action="{{ route('updateProflieImage') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

            <div class="form-group">
                <label for="placeDescription">Your Profile Image</label>
                &nbsp; &nbsp;
                <img src="{{asset('images')}}/{{$place->profileImage}}" alt="" class="img-fluid" width="100">
                <br>
                <br>
                <input type="file" class="form-control" id="profileImage" name="profileImage" value="">                
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary" onClick="return alert('Profile image has been updated successfully!')">Conform</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection