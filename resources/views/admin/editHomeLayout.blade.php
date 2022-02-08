@extends('includes.adminLayout')

@section('adminContent')

<div class="layout-border">

    <form action="{{ route('saveHomeLayout') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <button class="adding-btn layout-btn">Save Changes</button>

        {{-- ###### HERO SECTION --}}

        <div class="hero" id="home">

            <div class="hero-content container">
                <h3><input name="row1_title1" type="text" value=""></h3>
                <h1><input name="row1_title2'" type="text" value="Design"></h1>
                <p><textarea name="row1_description" id="" cols="50" rows="10"
                        style="width:100%">Design has always been my passion ... I honor and appreciate any out of the box design which always seems to hit a high level of appreciation. Creating a pattern or a curve or even an angled shaped which is unseen and unfamiliar will always stand out. It is all about ideas, organising, exploring and implementing with a neat proper finish and not of all creativity. Creativity is the use of imagination to create something inventiveness. It is a phenomen where by something somehow new and somehow valuable is formed. The created item may be intangible or a physical object.</textarea>
                </p>
                <button class="main-btn"><a>Shop Now</a></button>
            </div>

            <div>
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
                    <path fill="#fff" fill-opacity="1"
                        d="M0,32L80,74.7C160,117,320,203,480,208C640,213,800,139,960,106.7C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>

        </div>

        {{-- ###### Style SECTION --}}

        <div class="container style-section">
            <h1><input name="row2_title1" type="text" value="Introducing The Style You Always Wanted"></h1>
            <h6><input name="row2_title2" type="text"
                    value="Our services are aligning with the new way of life. We make a beautiful design and sustainable furniture.">
            </h6>
            <div class="style-img-cont row align-items-center">
                <div class="col-8">
                    <img src="{{ asset('images/style-img.jpeg') }}">
                </div>
                <div class="col-4 text-left">
                    <i class="fa fa-arrow-left" aria-hidden="true">Change Photo</i>
                    <input name="row2_image" class="mt-3" type="file">
                </div>
            </div>
        </div>

    </form>

</div>


@endsection