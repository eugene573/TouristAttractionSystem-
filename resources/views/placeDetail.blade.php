@extends('layout')
@section('content')
<br>
<br>
<br>
<div class="row">
    @foreach($places as $place)
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <div class="container features">
        <div class="card-body">
        <div class="row">
               @CSRF
            <div class="col-md-9">
             <center><h2>{{$place->name}}</h2></center>
             <input type="hidden" name="placeID" value="{{$place->id}}">
             <!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

h3 {
        color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
  }

h2 {
        color: white;
  text-shadow: 3px 3px 3px green, 0 0 20px green, 0 0 10px green;
}

body {
  font-family: Arial;
  margin: 0;
  background-image: url("https://cdn.wallpapersafari.com/60/84/yhk1gA.jpg");
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 53%;
  width: 5%;
  padding: 16px;
  margin-top: -80px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
 
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 22px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

</style>
<body>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 5</div>
    <img src="{{asset('images/')}}/{{$place->image1}}" style="width:800px;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <img src="{{asset('images/')}}/{{$place->image2}}" style="width:800px;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <img src="{{asset('images/')}}/{{$place->image3}}" style="width:800px;height:500px;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <img src="{{asset('images/')}}/{{$place->image4}}" style="width:800px;height:500px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <img src="{{asset('images/')}}/{{$place->image5}}" style="width:800px;height:500px;">
  </div>
        
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <head>
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}
</style>
</head>
             <br>
            </div>
            </div>
               <br>
               <br>
              <div class="col-md-9">
              <h5><div class="card-text"><strong><b style="color:#28A828;">Reviews: &nbsp;&nbsp;</b></strong>{{$place->reviews}} ⭐</div></h5>
              <br>
              <h5><div class="card-text"><strong><b style="color:#28A828;">Introduction:&nbsp;&nbsp;</b></strong>{{$place->introduction}}</div></h5>
               <br>
               <h5><div class="card-text"><strong><b style="color:#28A828;">Near By Area:&nbsp;&nbsp;</b></strong>{{$place->nearByArea}}</div></h5>
              <br>
               <h5><div class="card-text"><strong><b style="color:#28A828;">Open Hour⏰: &nbsp;&nbsp;</b></strong>{{$place->openHour}}</div></h5>
               <br>
              <h5><div class="card-text"><strong><b style="color:#28A828;">Price💲: &nbsp;&nbsp;</b></strong>{{$place->price}}</div></h5>
              <br>
              <h5><div class="card-text"><strong><b style="color:#28A828;">Address📌: &nbsp;&nbsp;</b></strong>{{$place->address}}</div></h5>
               <br>
              <h5><div class="card-text"><strong><b style="color:#28A828;">Contact Number📞: &nbsp;&nbsp;</b></strong>{{$place->contactNumber}}</div></h5>
              <br>
              <h5><div class="card-text"><strong><b style="color:#28A828;"> Booking Now📩: &nbsp;&nbsp;</b></strong><a href="{{$place->bookingMethod}}"><u style="color:blue;">CLICK HERE</u></a></div></h5>
              <br>
              <br>
              <iframe src="{{$place->map}}" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div> 
              <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62c993cd5f98c742"></script>
      </div>
    </div>
</div>
    @endforeach
</div>
<br>
@endsection 