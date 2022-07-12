@extends('layout')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl"><br><br>
            Update Post
        </h1>
    </div>
</div><br><br>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<center>
<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input
            style="width:60rem"
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-3 text-6xl outline-none"><br><br><br>

        <textarea
            style="height:25rem; width:60rem"
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 text-xl outline-none">{{ $post->description }}</textarea> <br><br><br>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-3 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
</center>

@endsection