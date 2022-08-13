@extends('layout')

@section('content')

<style>
 h1 {
    color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
}

h6{
        font-weight: bold;
    }
</style>

<body>
<br><br><br>
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

            <div class="panel-body">
                @foreach ($post as $posts)

                    <h2>{{ $post->title }} <small>{{ $post->likes()->count() }} <i class="fa fa-thumbs-up"></i></small></h2>

                    @foreach ($post->likes as $user)
                        {{ $user->name }} likes this !<br>
                     @endforeach

                    @if ($post->isLiked)
                        <a href="{{ route('post.like', $post->id) }}">Unlike this shit</a>
                    @else
                        <a href="{{ route('post.like', $post->id) }}">Like this awesome post!</a>
                    @endif
                @endforeach
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">My likes</div>

                <div class="panel-body">
                    @foreach (Auth::user()->likedPosts as $post)

                        <h2>{{ $post->title }}</h2>

                        <a href="{{ route('post.like', $post->id) }}">Unlike this shit</a>
                    @endforeach
                </div>

<div class="w-4/5 m-auto pt-20 text-right">
    <span style="font-style:bold; font-style:italic;">
      <center> • By <span>{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }} </center>
    </span>

    <br><br>

    <center>
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" width="650" class="img-fluid"  alt="">
    </div>
    </center>
    <br>
    <br>
    <center>
    <div class="text">
    <h6><a href="{{ $post->user->avatar }}"><img class="rounded-circle" height="70" width="70" src="{{$post->user->avatar}}"
                    alt="User profile picture">  &nbsp;&nbsp;{{ $post->user->name }}</h6>
            </div>
            </center>
  
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-center">
        {{ $post->description }}
    </p>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62c993cd5f98c742"></script>

</div>
</body>
@endsection 