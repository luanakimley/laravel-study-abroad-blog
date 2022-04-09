@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-16 border-b border-gray-200">
        <h1 class="text-5xl uppercase font-bold">
            Bookmarks
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@foreach ($posts as $post)
    @if(Auth::user()->isBookmarked($post))
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">
            <div>
                <img class="h-auto m-auto w-auto" src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                @foreach ( $post->tags()->get() as $tag) 
                    <span class="mr-3 bg-gray-600 text-white rounded-full text-xs p-1 px-2 font-bold capitalize"><i class="bi bi-tag-fill mr-1"></i>{{ $tag->name }}</span>
                @endforeach
                <h2 class="text-gray-700 font-bold text-5xl pb-4 pt-10">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-700 pb-10 leading-8 font-light">
                    {!!  substr($post->description, 0, 200)  !!}...
                </p>

                <br><br>

                <div>

                    <a href="/blog/{{ $post->slug }}" class="uppercase bg-sky-500 hover:bg-sky-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Keep Reading
                    </a>

                
                    <form class="inline-block" method="post" action="{{ url('bookmark', ['slug' => $post->slug, 'user_id'=>Auth::user()->id] ) }}" 
                        enctype="multipart/form-data">
                        @csrf
                        <button type="submit"><i class="bi bi-bookmark-heart-fill text-2xl ml-4"></i></button>
                    </form>

            

                </div>

            
            </div>
        </div>    
    @endif
@endforeach
@endsection