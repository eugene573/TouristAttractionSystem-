@extends('layout')
@section('content')

<style>
    body{
      background color: white;
    }
</style>

<!-- Mask -->
<div id="intro" class="view">

<div class="mask rgba-black-strong">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text center">

            <div class="col-md-10">
    <!-- Heading -->
    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">FunTime</h2>

    <!-- Divider -->
    <hr class="hr-light">

    <!-- Description -->
    <h4 class="white-text my-4">Welcome to Fun Time website! This is a website where you can find the Tourist Attraction, Homestay, Indoor&Outdoor Activities in Malaysia. Hope it helps you to find what suits for you, HAVE FUN! </h4>
    </div>
</div>
</div>
</div>
</div>

<br>
<br>

<!-- Main layout -->
<main class="mt-5">
<div class="container">
<section id="best-features" class="text-center">

    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold">Social media account</h2>

    <!-- Grid row -->
    <div class="row d-flex justify-content-center mb-4">
        <!-- Grid column -->
        <div class="col-md-8">

            <!-- description -->
            <h4><p class="blue-text">Follow us on our social media account for more information.</p></h4>
        </div>
    </div>
   
    <div class="row">

        <div class="col-md-4 mb-5">
        <button style="font-size:48px;color:blue;border:none;background:white"  onclick="window.location.href = 'https://web.facebook.com/FunTime-112406794834332/?ref=page_internal';"><i class="fa fa-facebook-official"></i></button>
            <h4 class="my-4 font-weight-bold" >Facebook</h4>
            <p class="grey-text">Fun Time</p>
        </div>

        <div class="col-md-4 mb-5">
        <button style="font-size:48px;color:red;border:none;background:white"  onclick="window.location.href = 'https://www.youtube.com/channel/UCq23Ma0wmyHFHckGkHa4kxA';"><i class="fa fa-youtube-play"></i></button>
            <h4 class="my-4 font-weight-bold">Youtube</h4>
            <p class="grey-text">Fun Time</p>
        </div>

        <div class="col-md-4 mb-5">
        <button style="font-size:48px;color:rgb(228, 107, 127);border:none;background:white" onclick="window.location.href = 'https://www.instagram.com/funtime220614/';"><i class="fa fa-instagram"></i></button>    
        <h4 class="my-4 font-weight-bold">Instagram</h4>
            <p class="grey-text">FunTime220614</p>
        </div>
    </div>
    </div>
</section>
 <br>
 <br>

 <!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table; backg
}
</style>
</head>

<body>
<h2 class="mb-5 font-weight-bold text-center black-text">Recommendation 👍</h2>

<div class="row">

  <div class="column">
    <center>
    <img src="http://localhost:8000/images/pcc.jpg" alt="" style="width:60%;height:60%;">
     <br>
     <br>
    <p>  Cameron Highlands Flora Park  </p>
    <button style="width:35%;" onclick= "window.location.href = 'http://localhost:8000/placeDetail/15';">view</button>
  </center>
  </div>

  <div class="column">
  <center>
    <img src="http://localhost:8000/images/wmxecnhg1mejqwqrqdmb.webp" alt="" style="width:60%;height:60%;">
      <br>
      <br>
    <p>  Camp5 Climbing Gym Paradigm Johor  </p>
      <button style="width:35%;" type="submit" onclick= "window.location.href = 'http://localhost:8000/placeDetail/10';">view</button>
</center>
  </div>
  
  <div class="column">
  <center>  
  <img src="http://localhost:8000/images/RUD-Karting-in-Johor-Bahru-1.png" alt="" style="width:60%;height:60%;">
   <br>
   <br>
  <p>  RUD GoKart Karting Johor  </p>  
    <button style="width:35%;" onclick= "window.location.href = 'http://localhost:8000/placeDetail/11';">view</button>
</center>
</div>
</div>
</body>
</html>
@endsection