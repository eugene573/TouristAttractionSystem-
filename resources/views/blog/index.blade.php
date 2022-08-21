@extends('layout')

@section('content')

<style>
 h3 {
        color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
  }
  
h1 {
  color: #28A828;
  text-shadow: 3px 3px 3px white, 0 0 20px white, 0 0 10px green;
}

    body{
        background-color: beige;
        font-family: Arial;
    }
    .card{
        
        background-color: white;
        background-repeat: no-repeat;
        background-size: auto;
        padding: 25px;
        width: 87.5rem;
        left: 5.5%;
        border-radius: 20px;
    }
    #column{
        float: center;
        width: 75%;
    }
    h5{
        font-size: small;
        font-style: italic;
    }
    h6{
        font-weight: bold;
    }
    #float-right{
        float: right;
    }
    button{
        background-color: white;
        font-style: italic;
        border: none;
        color: red;
    }
    
    *,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --color-primary: #f6aca2;
  --color-secondary: #f49b90;
  --color-tertiary: #f28b7d;
  --color-quaternary: #f07a6a;
  --color-quinary: #ee6352;
}

.content {
  display: flex;
  align-content: center;
  justify-content: center;
}

.text_shadows {
  text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary),
    9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  font-family: bungee, sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  font-size: calc(0.8rem + 4vw);
  text-align: center;
  margin: 0;
  color: var(--color-primary);
  /*color: transparent;
  //background-color: white;
  //background-clip: text;*/
  animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
  letter-spacing: 0.5rem;
}

@keyframes shadows {
  0% {
    text-shadow: none;
  }
  10% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  20% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary);
  }
  30% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  40% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary),
      12px 12px 0 var(--color-quinary);
  }
  50% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary),
      12px 12px 0 var(--color-quinary);
  }
  60% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary),
      12px 12px 0 var(--color-quinary);
  }
  70% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  80% {
    text-shadow: 3px 3px 0 var(--color-secondary),
      6px 6px 0 var(--color-tertiary);
  }
  90% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  100% {
    text-shadow: none;
  }
}

@keyframes move {
  0% {
    transform: translate(0px, 0px);
  }
  40% {
    transform: translate(-12px, -12px);
  }
  50% {
    transform: translate(-12px, -12px);
  }
  60% {
    transform: translate(-12px, -12px);
  }
  100% {
    transform: translate(0px, 0px);
  }
}
</style>

<script>
  
</script>

<br>
<br><br>
<div class="content">
  <h2 class="text_shadows">Blog Post</h2>
</div>

@if (session()->has('massege'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif
<br><br>
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto" style="font-style:italic;">
        <a 
            href="/blog/create"
            class="bg-black-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-2 px-4 rounded-3xl">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create Post
        </a>
    </div><br>
@endif

@foreach($posts as $post)
 
<div class="row">
    <div class="column">
        <div class="card">
          <center>
         <h1>{{ $post->title }}</h1>
            <h5>
            Created on {{ date('jS M Y', strtotime($post->updated_at))}}  
            </h5>
            </center>
            <br>
            <div><center>
                <img src="{{ asset('images/' . $post->image_path) }}" style="height: 500px; width: 700px;" class="img-fluid" alt="">
            </div></center><br>

            <div class="text">
                    <h6><a href="{{ $post->user->avatar }}"><img class="rounded-circle" height="70" width="70" src="{{$post->user->avatar}}" 
                    alt="User profile picture"></a>  &nbsp;&nbsp;{{ $post->user->name }}</h6>
            </div>
            
            <p>
                {{ $post->description }}
            </p>
            
            <span>
            <i class="fas fa-thumbs-up" aria-hidden="true"></i>
            <a href="#" style="color: black;">{{ $post->likedUsers->count() }} Likes</a>&nbsp;&nbsp;

            <i class="fas fa-comment-dots" aria-hidden="true"></i>
            <a href="#" style="color: black;">{{ $post->comments->count() }} Comments</a>
            </span>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            View Full Post
            </a>
           
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <span class="float-right" style="font-style:italic;">
                            <a href="/blog/{{ $post->slug }}/edit"
                            class="text-gray-700 hover:text-gray-900 pb-1 border-b-2">
                            Edit 
                            </a>
                        </span>
                    </div><br>
                    &nbsp;
                    &nbsp;
            <span class="float-right">
                <form 
                    action="/blog/{{ $post->slug }}"
                    method="POST">
                    @csrf 
                    @method('delete')

                    <div class="col-sm" style="font-style:italic;">
                        <div>
                            <button type="submit">
                                Delete 
                            </button>
                        </div>
                    </div>
                </form>
            </span>             
            </div>
            </div>
            @endif
        </div>
    </div>
</div>

<br><br>
@endforeach
@endsection