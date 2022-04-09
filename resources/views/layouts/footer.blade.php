<br>
<footer class="text-center text-white" style="background-color: #0a4275;">
    <div class="container p-6">
       
      <div class="">
        <img
            src="https://media.discordapp.net/attachments/902133591272730654/961667287419617351/Explore_new_opportunities.png" class="max-w-full h-20 rounded-full" alt="">
        <p class="flex justify-center items-center">
          <p class="font-mono">Our Blogs inspire you to achieve your Dreams!</p>
            <br>
          
          <span class="mr-4">Register for free</span>
          <button type="button" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
            
            @if (Route::has('register'))
                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        
          </button>
          <br>
        </p>
      </div>
    </div>
  
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright: Luana & Siya
    </div>
  </footer>