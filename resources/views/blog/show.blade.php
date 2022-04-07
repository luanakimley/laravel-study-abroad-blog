@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-16">
        <h1 class="text-5xl uppercase font-bold">
            {{ $post->title }}
        </h1>
    </div>
</div>

<img class="m-auto h-80" src="{{ asset('images/' . $post->image_path) }}" alt="">

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

   

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! $post->description !!}
    </p>
    <br><br>

       {!! Share::page("http://127.0.0.1:8000/blog/{$post->title}")->facebook()->twitter()->whatsapp()->telegram()->reddit() !!}                        

</div>

@endsection 
