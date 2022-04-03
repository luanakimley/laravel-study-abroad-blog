@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-16">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! $post->description !!}
    </p>

    <div class="flex my-2">
        <i style="background-color: #3B5998;"
        class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-facebook-f"></i>
        <i style="background-color:#dd4b39"
        class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fas fill-current text-white text-xl fa-envelope"></i>
        <i style="background-color:#125688;"
        class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-instagram"></i>
        <i style="background-color:#55ACEE;"
        class="flex items-center justify-center h-12 w-12 mx-1 rounded-full fab fill-current text-white text-xl fa-twitter"></i>
    </div>

</div>

@endsection 
