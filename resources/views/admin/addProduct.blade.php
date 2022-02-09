@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>Add Project</h3>
        <a class="adding-btn" href="{{ route('admin.dashboard') }}">Back To Dashboard</a>
    </div>
    <hr>

    <div class="row align-items-center justify-content-center text-center">
        <form action="{{ route('saveCommercial') }}" method="POST" class="adding-form" enctype="multipart/form-data">
            @csrf

            <input name="name" type="text" placeholder="Project Name">
            <input name="image" type="file">
            <button class="adding-btn" type="submit">Add Project</button>

        </form>
    </div>

</div>
@endsection