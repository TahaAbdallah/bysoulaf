@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>Add Client</h3>
        <a class="adding-btn" href="{{ route('admin.dashboard') }}">Back To Dashboard</a>
    </div>
    <hr>

    <div class="row align-items-center justify-content-center text-center">
        <form action="{{ route('saveClient') }}" method="POST" class="adding-form" enctype="multipart/form-data">
            @csrf

            <input name="name" type="text" placeholder="Client Name">
            <input name="image" type="File">

            <button class="adding-btn" type="submit">Add Client</button>

        </form>
    </div>

</div>
@endsection