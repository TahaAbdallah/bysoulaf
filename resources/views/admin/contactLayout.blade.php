@extends('includes.adminLayout')

@section('adminContent')

<div class="layout-border">

    <button class="adding-btn layout-btn">Save Changes</button>

    <div class="container row m-auto contact-cont">

        <div class="row justify-content-center">
            <div class="col-12 text-center text-lg-left">
                <h1>Contact Us</h1>
                <hr>
            </div>

            <div class="col-lg-6 text-center">
                <img class="img-fluid" src="{{ asset('images/test-img/contact.JPG') }}">
            </div>

            <div class="col-lg-6 text-left">

                <i class="fa fa-arrow-left" aria-hidden="true">Change Photo</i>
                <input type="file">

            </div>
        </div>
    </div>


</div>

@endsection