@extends('includes.mainLayout')

@section('mainContent')

<div class="nav-bg"></div>

<div class="container row align-items-center m-auto history-cont">

    <div class="row align-items-center justify-content-center">
        <div class="col-12 text-center text-lg-left">
            <h1>Our History</h1>
            <h6>Since 1996</h6>
            <hr>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid" src="{{ asset('images/test-img/history.jpg') }}">
        </div>

        <div class="col-lg-6">
            <p>I started out on my own, , In1996, yet my inner passion always served me properly towards designing,
                assuring not copying but creating new concepts and out of the box designs…. My professor back in school
                always insisted on not taking shots of our previous designs in order for us to create better ones… I
                believe he was right back then, although nowadays things are different and pictures are highly needed to
                promote one’s work…. I am an old school designer striving with technology and trying to catch up with
                new trends and perceptions to always stay up to date… I honor my colleagues, the ones that worked with
                us as well as others and I see my daughter who was and still is one of my favorite designers… We create
                a connection between the old and the new, we balance between trends and experience, we challenge
                ourselves, motivate our abilities and capabilities, we honor, respect and appreciate each other talents
                assuring our boundaries with love and transparency….. We learn from history yet the futur is our aim…..
            </p>

        </div>
    </div>
</div>

@endsection