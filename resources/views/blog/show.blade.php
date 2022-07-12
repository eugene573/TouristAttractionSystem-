@extends('layout')

@section('content')
<body>
<br><br><br>
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20 text-right">
    <span style="font-style:bold; font-style:italic;">
      <center>  By <span>{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }} </center>
    </span>

    <br><br>

    <center>
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" width="650" class="img-fluid"  alt="">
    </div>
    </center>

    <br><br>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-center">
        {{ $post->description }}
    </p>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62c993cd5f98c742"></script>
</div>
</body>
@endsection 