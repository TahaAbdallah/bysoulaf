@extends('includes.mainLayout')

@section('mainContent')

<div class="nav-bg"></div>

<div class="container-fluid text-center portfolio-cont">

    <h1>Our Residential Projects</h1>

    <p>BYSOULAF IS A CREATIVE INTERIOR DESIGN COMPANY SPECIALIZING IN GROWING YOUR DESIRES. HERE'S A
        SNAPSHOT OF SOME OF THE WORK FROM OUR DESIGNS WE'RE PROUD OF.</p>

    <hr>

</div>

<div class="container test">


    <div class="container-fluid gallery">
        @foreach ($clients as $item)
        <img class="portfolio-img" src="{{ asset($item->image) }}" class="rounded mb-3" />
        @endforeach
    </div>


</div>

@endsection