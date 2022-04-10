@extends('layouts.app')
@section('content')
<div class="w-full max-w-xs">
 <br>
 <br>
    <form method="POST" action="{{ route('contact-form.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <br>
        @if(Session::has('success')) 

        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">

        {{ Session::get('success') }} 

        @php 

            Session::forget('success'); 

        @endphp 

        </p> 

    @endif
        {{ csrf_field() }} 
        <br>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Name
        </label>
        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name" value="{{ old('name') }}">
        @if ($errors->has('name')) 

        <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>

        @endif
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="Email" value="{{ old('email') }}">
        @if ($errors->has('email')) 

        <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p> 

         @endif 
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Phone
        </label>
        <input name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Phone" value="{{ old('phone') }}"> 

        @if ($errors->has('phone')) 

        <p class="text-red-500 text-xs italic">{{ $errors->first('phone') }}</p> 

        @endif 
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Subject
        </label>
        <input name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Subject" value="{{ old('subject') }}"> 

        @if ($errors->has('subject')) 

        <p class="text-red-500 text-xs italic">{{ $errors->first('subject') }}</p> 

        @endif 
      </div>

      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Message
        </label>
        <textarea name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Message">{{ old('message') }}</textarea> 

        @if ($errors->has('message')) 

        <p class="text-red-500 text-xs italic">{{ $errors->first('message') }}</p> 

        @endif 
      </div>
      <br>
      <div class="flex items-center justify-between">
        <button  class="text-center bg-gray-700 hover:bg-gray-800 px-5 py-3 font-bold text-xl uppercase rounded-lg text-white">
          Send
        </button>
      </div>
    </form>
  </div>


   

@endsection 
