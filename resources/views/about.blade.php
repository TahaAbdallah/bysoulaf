@extends('includes.mainLayout')

@section('mainContent')

<div class="nav-bg"></div>

<div class="container row align-items-center m-auto about-cont">

    <div class="row align-items-center justify-content-center">
        <div class="col-12 text-center text-lg-left">
            <h1>About Us</h1>
            <hr>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid" src="{{ asset('images/style-img.jpeg') }}">
        </div>

        <div class="col-lg-6">
            <p>Design has always been my passion ... I honor and appreciate any out of the box design which always
                seems
                to
                hit
                a high level of appreciation. Creating a pattern or a curve or even an angled shaped which is unseen
                and
                unfamiliar will always stand out. It is all about ideas, organising, exploring and implementing with
                a
                neat
                proper finish and not of all creativity. Creativity is the use of imagination to create something
                inventiveness.
                It is a phenomen where by something somehow new and somehow valuable is formed. The created item may
                be
                intangible or a physical object.</p>

        </div>
    </div>
</div>

@endsection