<br>
<footer class="text-center text-white" style="background-color: #0a4275;">
    <div class="p-6">
       


        <p class="flex justify-center items-center">
          <img
            src="https://media.discordapp.net/attachments/902133591272730654/961667287419617351/Explore_new_opportunities.png" 
            class="mt-3 max-w-full h-20 rounded-full mb-7" alt="">
          <p class="font-mono">Our blog will inspire you to achieve your dreams!</p>
            <br>

            @if (Auth::guest())
          
          <span class="mr-4">Register for free</span>
          <button type="button" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
            
          
                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        
          </button>

        </p>
      </div>

  
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright: Luana & Siya
    </div>
  </footer>