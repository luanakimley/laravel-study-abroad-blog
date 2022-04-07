@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-16">
        @foreach ( $post->tags()->get() as $tag) 
            <span class="mr-3 bg-transparent text-sky-500 border border-sky-500 rounded-full text-xs p-1 px-2 font-bold capitalize"><i class="bi bi-tag-fill mr-1"></i>{{ $tag->name }}</span>
        @endforeach
        <h1 class="text-5xl uppercase font-bold pt-10">
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
       {!! Share::page("http://127.0.0.1:8000/blog/{$post->slug}")->facebook()->twitter()->whatsapp()->telegram()->reddit() !!}            
    </div>
    


    <div>
        <br>
        <br>

        <div id="disqus_thread" class="px-8"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    
    var disqus_config = function () {
    this.page.url = '{{ Request::url() }}';  
    this.page.identifier = {{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://disquslaravel-ex6ks1dpbw.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>

</div>

@endsection 
