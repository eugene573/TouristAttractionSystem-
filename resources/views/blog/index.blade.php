@extends('layout')

@section('content')

<style>
    body{
        background-color: beige;
        font-family: Arial;
        padding: 75px;
    }
    .card{
       
        background-color: white;
        background-repeat: no-repeat;
        background-size: auto;
        padding: 25px;
        width: 87.5rem;
    }
    #column{
        float: center;
        width: 75%;
    }
    h5{
        font-size: small;
        font-style: italic;
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
    
</style>

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-10"><br><br>
        <h1 class="text-6xl ">
            Blog Post
        </h1>
    </div>
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
            Create Post
        </a>
    </div><br>
@endif

@foreach($posts as $post)
@endforeach 

<div class="row">
    <div class="column">
        <div class="card">
         <h1>{{ $post->title }}</h1>
            <h5>By <span>{{ $post->user->name }}</span>, 
            Created On {{ date('jS M Y', strtotime($post->updated_at)) }}  
            </h5><br>
            <div><center>
                <img src="{{ asset('images/' . $post->image_path) }}" style="height: 500px; width: 700px;" class="img-fluid" alt="">
            </div></center><br>
            <p>
                {{ $post->description }}
            </p>
            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading...
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

@endsection
