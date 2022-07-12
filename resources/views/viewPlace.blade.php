@extends('layout')
@section('content')

<style>
    body{
        background-image: url("https://cdn.wallpapersafari.com/60/84/yhk1gA.jpg");
    }
</style>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br>
        <br>
        <br>
        <br>
        <div class="row">    
            @foreach($places as $place)
            <div class="col-sm-4">
            <div class="card" style="width: 20rem; height: 660">
                <img class="card-img-top img-fluid" src="{{asset('images/'.$place->image1)}}" alt="Place Image" style='height: 220px; width: 35rem;'>
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center; color:black">{{$place->name}}</h3>
                    <br>
                    <h5 class="card-text" style="text-align: center; color: black;">{{$place->reviews}}⭐</h5>
                    <br>
                    <h5 class="card-text" style="text-align: center;">💲{{$place->price}}</h5>
                    <br>
                    <h5 class="card-text" style="text-align: center;">{{$place->catName}}</h5>
                    <br>
                    <h5 class="card-text" style="text-align: center;">⏰ {{$place->openHour}} </h5>
                     <br>
                    <a href="{{ route('place.detail', $place->id) }}" class="btn btn-success" style="margin-left:100px">View</a>
                </div>
            </div>
            <br>
            <br>
            </div>
            @endforeach
        </div>    
        <br>
    </div>
    <div class="col-sm-2"></div>
</div>

@endsection