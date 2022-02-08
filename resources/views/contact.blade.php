@extends('includes.mainLayout')

@section('mainContent')

<div class="nav-bg"></div>

<div class="container row m-auto contact-cont">

    <div class="row justify-content-center">
        <div class="col-12 text-center text-lg-left">
            <h1>Contact Us</h1>
            <hr>
        </div>

        <div class="col-lg-6 text-center">
            <img class="img-fluid" src="{{ asset('images/test-img/contact.JPG') }}">
        </div>

        <div class="col-lg-6 text-center">

            <form action="{{ route('saveMessage') }}" method="POST">
                @csrf

                <h6>Enter Your Name</h6>
                <input type="text" name="client_name">

                <h6>E-mail</h6>
                <input type="email" name="email">

                <h6>Phone Number</h6>
                <input type="number" name="phone">

                <h6>Your Message</h6>
                <textarea name="message" id="" cols="30" rows="10"></textarea>

                <button class="form-btn" type="submit">Send</button>

            </form>

        </div>
    </div>
</div>

@endsection