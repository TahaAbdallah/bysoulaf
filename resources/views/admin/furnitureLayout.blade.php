@extends('includes.adminLayout')

@section('adminContent')

<div class="layout-border">

    <button class="adding-btn layout-btn">Save Changes</button>

    <div class="furniture-cont-page">
        <div class="container text-center furniture-sm-cont-page">
            <h1>FURNITURE</h1>
            <p><textarea name="" id="" cols="30" rows="13" style="width:100%">
                Design has always been my passion ... I honor and appreciate any out of the box design which always seems to
                hit
                a high level of appreciation. Creating a pattern or a curve or even an angled shaped which is unseen and
                unfamiliar will always stand out. It is all about ideas, organising, exploring and implementing with a neat
                proper finish and not of all creativity. Creativity is the use of imagination to create something
                inventiveness.
                It is a phenomen where by something somehow new and somehow valuable is formed. The created item may be
                intangible or a physical object. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui assumenda
                fugit
                soluta eum vel, nobis rem praesentium nemo nisi deleniti ipsum odit perspiciatis a expedita dolores
                molestias
                veniam? Dolorum, voluptas. Eos illo unde ut quisquam. Sint voluptate, alias quibusdam fugit molestiae error
                suscipit corporis quis ullam unde voluptatum quae provident impedit est officia eveniet consequuntur nostrum
                ipsa? Nihil, autem. Accusamus. Dolore libero molestias est illum blanditiis eaque maxime sapiente. Magnam
                quisquam debitis ut ducimus dolorem dolor nemo cupiditate voluptatibus laboriosam amet velit expedita
                molestiae,
                assumenda quo nobis, facilis, quasi quod. Quae, delectus officia sed fugit laboriosam voluptatibus eos
                praesentium rerum harum pariatur ipsam recusandae, nihil sint nostrum rem provident quibusdam aperiam
                distinctio. Incidunt repellat nobis voluptas. Ipsum qui soluta esse?</textarea></p>
        </div>

        <div class="row">
            <div class="card text-center furniture-page-cards col-6 col-md-3">
                <img class="card-img-top"
                    src="{{ asset('images/test-img/WhatsApp Image 2022-01-20 at 2.11.36 PM (1).jpeg') }}">
            </div>
            <div class="card text-center furniture-page-cards col-6 col-md-3">
                <img class="card-img-top"
                    src="{{ asset('images/test-img/WhatsApp Image 2022-01-20 at 2.11.36 PM (1).jpeg') }}">
            </div>
            <div class="card text-center furniture-page-cards col-6 col-md-3">
                <img class="card-img-top"
                    src="{{ asset('images/test-img/WhatsApp Image 2022-01-20 at 2.11.36 PM (1).jpeg') }}">
            </div>
            <div class="card text-center furniture-page-cards col-6 col-md-3">
                <img class="card-img-top"
                    src="{{ asset('images/test-img/WhatsApp Image 2022-01-20 at 2.11.36 PM (1).jpeg') }}">
            </div>

        </div>

    </div>


</div>

@endsection