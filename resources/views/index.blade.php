@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto" >
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Are you planning to study abroad?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-700 hover:bg-gray-800 px-5 py-3 font-bold text-xl uppercase rounded-lg">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">

        @foreach ($posts as $post)
            @if ($post->lead_story == 1)
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    {{ $post->title }}
                </h2>
                
                <p class="py-8 text-gray-500 text-s mb-5">
                    {!! substr($post->description, 0, 200) !!}...
                </p>

                <a 
                    href="/blog/{{ $post->slug }}"
                    class="uppercase bg-sky-500 hover:bg-sky-600 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Find Out More
                </a>
            </div>
            @endif
        @endforeach
    </div>

    <div class="text-center p-10 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            What you can find...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Preparation Tips
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Where to Go
        </span>
        <span class="font-extrabold block text-4xl py-1">
            What is Erasmus
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Student Experiences
        </span>
    </div>

    <div class="text-center py-14">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
    </div>
    <div class="sm:grid grid-cols-3 gap-16 w-4/5 mx-auto pb-10">
        @foreach ($posts->slice(0,3) as $post)
            <div class="bg-yellow-600 text-white pt-10">
                <div class="m-auto pt-4 pb-16 w-4/5 block">
                    <span class="uppercase text-xs">
                        PHP
                    </span>

                    <h3 class="text-xl font-bold py-10">
                        {{ $post->title }}
                    </h3>

                    <a 
                        href="/blog/{{ $post->slug }}"
                        class="uppercase bg-transparent border-2 border-gray-100 hover:bg-gray-50 hover:text-yellow-600 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
     
        @endforeach
    </div>

@endsection