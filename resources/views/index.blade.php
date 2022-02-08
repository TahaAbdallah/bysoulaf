@extends('includes.mainLayout')

@section('mainContent')

{{-- ###### HERO SECTION --}}

<div class="hero" id="home">

    <div class="hero-content container">
        <h3>Interior</h3>
        <h1>Design</h1>
        <p>Design has always been my passion ... I honor and appreciate any out of the box design which always seems to
            hit a high level of appreciation. Creating a pattern or a curve or even an angled shaped which is unseen and
            unfamiliar will always stand out. It is all about ideas, organising, exploring and implementing with a neat
            proper finish and not of all creativity. Creativity is the use of imagination to create something
            inventiveness. It is a phenomen where by something somehow new and somehow valuable is formed. The created
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

    {{-- <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="50 55 1390 270">
        <path fill="#fff" fill-opacity="1"
            d="M0,32L80,74.7C160,117,320,203,480,208C640,213,800,139,960,106.7C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg> --}}
</div>

{{-- ###### Style SECTION --}}

<div class="container style-section">
    <h1>Introducing The Style You Always Wanted</h1>
    <h6>Our services are aligning with the new way of life. We make a beautiful design and sustainable furniture.</h6>
    <div class="style-img-cont">
        <img src="{{ asset('images/style-img.jpeg') }}">
    </div>
</div>

{{-- ###### Furniture SECTION --}}

<div class="container furniture-cont" id="furniture-section">

    <h1>Furniture</h1>

    @foreach ($products->take(8)->chunk(4) as $chunked)

    <div class="row furniture-row1">

        @foreach ($chunked as $product)


        <div class="furniture-card card text-center col-6 col-md-3">
            <img class="card-img-top" src="{{ asset($product->image) }}">
        </div>

        @endforeach

    </div>


    @endforeach

    <a href="{{ route('furniture') }}">View All</a>

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
                @foreach ($clients as $client)
                @if ($loop->first)
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset($client->image)}}">
                </div>
                @endif
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset($client->image)}}">
                </div>
                @endforeach
            </div>
            {{-- <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>

        <a href="{{ route('portfolio') }}">View All</a>

    </div>

</div>

@endsection