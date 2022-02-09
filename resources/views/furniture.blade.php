@extends('includes.mainLayout')

@section('mainContent')

<div class="furniture-cont-page">
    <div class="container text-center furniture-sm-cont-page">
        <h1>Commercial Projects</h1>
        <p>Here You can find all of our commercial Projects , For any questions go and click on contact us.</p>
    </div>

</div>

<div class="container furniture-page-row2 text-center">

    <h1>All Commercial Projects</h1>

    @foreach ($products->chunk(4) as $chunked)

    <div class="row">

        @foreach ($chunked as $product)

        <div class="furniture-card card text-center col-6 col-md-3">
            <img class="card-img-top" src="{{ asset($product->image) }}">
        </div>

        @endforeach

    </div>


    @endforeach


</div>

@endsection