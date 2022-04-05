@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-16">
        <h1 class="text-center text-5xl uppercase font-bold">
            Update Post
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent mt-0 block border-0 border-gray-20 border-b-2 w-full h-20 text-4xl focus:ring-0 focus:border-black">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-40 bg-transparent mt-4 block border-0 border-gray-20 border-b-2 w-full h-20 text-xl focus:ring-0 focus:border-black" id="editor">{{ $post->description }}</textarea> 

        <div class="py-20">
            <label class="w-4/5 text-xl block">Is this a lead story?</label>
            <div class="pt-10  flex">
                <div class="mr-5">
                    <input name="leadStory" class="form-radio" type="radio" value=1 
                    {{ ($post->lead_story == 1) ? "checked" : "" }}
                    >
                    <label>Yes</label>
                </div>
                <div>
                    <input name="leadStory" class="form-radio" value=0 type="radio"
                    {{ ($post->lead_story == 0) ? "checked" : "" }}>
                    <label>No</label>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="m-auto text-center mb-5">
                <ul class="flex">
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 mr-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-2">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
            
        <button    
            type="submit"
            class="uppercase mt-10 bg-sky-500 hover:bg-sky-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-full">
            Edit Post
        </button>
    </form>
</div>

@endsection
@section('scripts')

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    
</script>
@endsection