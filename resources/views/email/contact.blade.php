@extends('layouts.app');
@section('content')
<section>
<div class="container-contact2">


    {!! Form::open(['route'=>'contact.submit']) !!}
    <div class="wrap-contact2">
        <form class="contact2-form validate-form">
            <span class="contact2-form-title">
                Contact Us
            </span>

            @if(Session::has('message'))
            <div class="alert aletr-success">
                {{Session('message')}}
            </div>
            @endif


            <div class="wrap-input2 validate-input" data-validate="Name is required">
                <input class="input2" type="text" name="name">
                <span class="focus-input2" data-placeholder="NAME"></span>
            </div>

            <div class="wrap-input2 validate-input" data-validate="Valid Email is required">
                <input class="input2" type="text" name="email">
                <span class="focus-input2" data-placeholder="EMAIL"></span>
            </div>

            <div class="wrap-input2 validate-input" data-validate="Message is required">
                <textarea class="input2" name="message"></textarea>
                <span class="focus-input2" data-placeholder="MESSAGE"></span>
            </div>

            <div class="container-contact2-form-btn">
                <div class="wrap-contact2-form-btn">
                    <button class="contact2-form-btn">
                        SEND
                    </button>
                </div>
            </div>

            {!! Form::close() !!}
    </div>    
</div>
</section>
@endsection