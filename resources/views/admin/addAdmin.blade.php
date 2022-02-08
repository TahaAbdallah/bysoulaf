@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>Add admin</h3>
        <a class="adding-btn" href="{{ route('admin.dashboard') }}">Back To Dashboard</a>
    </div>
    <hr>

    <div class="row align-items-center justify-content-center text-center">
        <form action="{{ route('saveAdmin') }}" method="POST" class="adding-form">
            @csrf

            <input name="name" type="text" placeholder="Admin Name">
            <input name="email" type="text" placeholder="Admin E-mail">
            <input name="password" type="password" placeholder="Admin Password">

            <button class="adding-btn" type="submit">Add Admin</button>

        </form>
    </div>

</div>
@endsection