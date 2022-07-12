@extends('layout')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl"><br><br>
            Create Post
        </h1>
    </div>
</div><br><br><br>
 
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
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input
            style="height:3rem;width:60rem"
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-center text-6xl outline-none"><br><br><br>

        <textarea 
            style="height:25rem; width:60rem"
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 text-xl outline-none"></textarea><br><br><br>

        <div class="bg-grey-lighter pt-15">
            <label style="width:60rem;" class="flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div><br><br>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-3 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
</center>

@endsection