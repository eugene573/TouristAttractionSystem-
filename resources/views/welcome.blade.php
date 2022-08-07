@extends('layout')
@section('content')

<style>
    body{
      background color: white;
    }
    
    h3 {
        color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
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
  position: relative;
  max-width: 400px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table; 
}

* {box-sizing: border-box;}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: center; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  height: 11%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 7px;
  text-align: center;
}

.column:hover .overlay {
  opacity: 1;
}
</style>
</head>

<body>
<h2 class="mb-5 font-weight-bold text-center black-text">Recommendation</h2>

<div class="row">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  
  <div class="column">    
    <img src="http://localhost:8000/images/pcc.jpg" alt="" style="width:100%;height:60%;">
     <div class="overlay">Cameron Highlands Flora Park</div>
     <br>
     <center>
    <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/15';">view</button>
    </center>
  </div>

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <div class="column">
    <img src="http://localhost:8000/images/wmxecnhg1mejqwqrqdmb.webp" alt="" style="width:100%;height:60%;">
   <div class="overlay">Camp5 Climbing Gym Paradigm Johor</div>
   <br>
   <center>
      <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/10';">view</button>
   </center>
 </div>

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <div class="column">  
  <img src="http://localhost:8000/images/RUD-Karting-in-Johor-Bahru-1.png" alt="" style="width:100%;height:60%;">
  <div class="overlay">RUD GoKart Karting Johor</div>
  <br>
  <center>
    <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/11';">view</button>
</center>
</div>
</div>

<br>
<br>

<div class="row">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  
  <div class="column">    
    <img src="http://127.0.0.1:8000/images/242678380.jpg" alt="" style="width:100%;height:60%;">
     <div class="overlay">Fathers Guesthouse Cameron Highlands</div>
     <br>
     <center>
    <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/18';">view</button>
    </center>
  </div>

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <div class="column">
    <img src="http://127.0.0.1:8000/images/Berjaya_Times_Square_theme_park.jpg" alt="" style="width:100%;height:60%;">
   <div class="overlay">Berjaya Times Square Theme Park KL</div>
   <br>
   <center>
      <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/21';">view</button>
   </center>
 </div>

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <div class="column">  
  <img src="http://127.0.0.1:8000/images/Grand%20Medini%20Suites%20by%20Greatday.jpg" alt="" style="width:100%;height:60%;">
  <div class="overlay">Grand Medini Suites by Greatday</div>
  <br>
  <center>
    <button style="width:29%;" class="btn btn-success" onclick= "window.location.href = 'http://localhost:8000/placeDetail/27';">view</button>
</center>
</div>
</div>

</body>
</html>
@endsection