@extends('includes.mainLayout')

@section('mainContent')


<!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<div class="demo-cont">
    <!-- slider start -->
    <div class="fnc-slider example-slider">
        <div class="fnc-slider__slides">
            <!-- slide start -->
            <div class="fnc-slide m--blend-green m--active-slide">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    {{-- <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Black</span>
                            </div>
                            <div class="fnc-slide__heading-line">
                                <span>Widow</span>
                            </div>
                        </h2>
                        <button type="button" class="fnc-slide__action-btn">
                            Credits
                            <span data-text="Credits">Credits</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-dark">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    {{-- <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Captain</span>
                            </div>
                            <div class="fnc-slide__heading-line">
                                <span>America</span>
                            </div>
                        </h2>
                        <button type="button" class="fnc-slide__action-btn">
                            Credits
                            <span data-text="Credits">Credits</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-red">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    {{-- <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Iron</span>
                            </div>
                            <div class="fnc-slide__heading-line">
                                <span>Man</span>
                            </div>
                        </h2>
                        <button type="button" class="fnc-slide__action-btn">
                            Credits
                            <span data-text="Credits">Credits</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-blue">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    {{-- <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Thor</span>
                            </div>
                            <div class="fnc-slide__heading-line">
                                <span>Just Thor</span>
                            </div>
                        </h2>
                        <button type="button" class="fnc-slide__action-btn">
                            Credits
                            <span data-text="Credits">Credits</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <!-- slide end -->
        </div>
        <nav class="fnc-nav d-none">
            <div class="fnc-nav__bgs">
                <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                <div class="fnc-nav__bg m--navbg-dark"></div>
                <div class="fnc-nav__bg m--navbg-red"></div>
                <div class="fnc-nav__bg m--navbg-blue"></div>
            </div>
            <div class="fnc-nav__controls">
                <button class="fnc-nav__control">
                    Black Widow
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Captain America
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Iron Man
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Thor
                    <span class="fnc-nav__control-progress"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- slider end -->
    {{-- <div class="demo-cont__credits">
        <div class="demo-cont__credits-close"></div>
        <h2 class="demo-cont__credits-heading">Made by</h2>
        <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt=""
            class="demo-cont__credits-img" />
        <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
        <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
        <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
        <h2 class="demo-cont__credits-heading">Based on</h2>
        <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank"
            class="demo-cont__credits-link">Concept by Kreativa Studio</a>
        <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
        <div class="colorful-switch">
            <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending"
                id="colorful-switch-cb" />
            <label class="colorful-switch__label" for="colorful-switch-cb">
                <span class="colorful-switch__bg"></span>
                <span class="colorful-switch__dot"></span>
                <span class="colorful-switch__on">
                    <span class="colorful-switch__on__inner"></span>
                </span>
                <span class="colorful-switch__off"></span>
            </label>
        </div>
    </div> --}}
</div>


{{-- ###### HERO SECTION --}}

{{-- <div class="hero" id="home">

    <div class="hero-content container">
        <h3>Interior</h3>
        <h1>Design</h1>
        <p>Design has always been my passion ... I honor and appreciate any out of the box design which always
            seems to
            hit a high level of appreciation. Creating a pattern or a curve or even an angled shaped which is
            unseen and
            unfamiliar will always stand out. It is all about ideas, organising, exploring and implementing with
            a neat
            proper finish and not of all creativity. Creativity is the use of imagination to create something
            inventiveness. It is a phenomen where by something somehow new and somehow valuable is formed. The
            created
            item may be intangible or a physical object.</p>
        <button class="main-btn"><a href="{{ route('furniture') }}">Shop Now</a></button>
    </div>

    <div>
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
            <path fill="#fff" fill-opacity="1"
                d="M0,32L80,74.7C160,117,320,203,480,208C640,213,800,139,960,106.7C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>

</div> --}}

{{-- ###### Style SECTION --}}

<div class="container style-section">
    <h1>Introducing The Style You Always Wanted</h1>
    <h6>Our services are aligning with the new way of life. We make a beautiful design and sustainable
        furniture.</h6>
    <div class="style-img-cont">
        <img src="{{ asset('images/style-img.jpeg') }}">
    </div>
</div>

{{-- ###### Commercials SECTION --}}

<div class="container furniture-cont" id="furniture-section">

    <h1>Some Of Our Commercial Projects</h1>

    @foreach ($products->take(8)->chunk(4) as $chunked)

    <div class="row furniture-row1">

        @foreach ($chunked as $product)


        <div class="furniture-card card text-center col-6 col-md-3">
            <img class="card-img-top" src="{{ asset($product->image) }}">
        </div>

        @endforeach

    </div>


    @endforeach

    <a href="{{ route('commercials') }}">View All</a>

</div>


{{-- ###### Residentials SECTION --}}

<div class="container furniture-cont" id="residential-section">

    <h1>Some Of Our Residential Projects</h1>

    @foreach ($clients->take(8)->chunk(4) as $chunked)

    <div class="row furniture-row1">

        @foreach ($chunked as $client)


        <div class="furniture-card card text-center col-6 col-md-3">
            <img class="card-img-top" src="{{ asset($client->image) }}">
        </div>

        @endforeach

    </div>


    @endforeach

    <a href="{{ route('residentials') }}">View All</a>

</div>


{{-- ###### Portfolio SECTION --}}

<div class="portfolio-big-cont" id="portfolio-section">

    <div class="container-fluid portfolio-sm-cont">

        <h1>Our Portfolio</h1>
        <h6>Take A look On What We Did For Our Precious Clients</h6>

        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
                <li data-target="#carouselId" data-slide-to="3"></li>
                <li data-target="#carouselId" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($randomClients as $randomClient)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset($randomClient->image)}}">
                </div>
                @endif
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset($randomClient->image)}}">
                </div>
                @endforeach
            </div>

        </div>
    </div>

</div>

@endsection