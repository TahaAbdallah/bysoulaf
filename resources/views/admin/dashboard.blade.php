@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>All admins</h3>
        <a class="adding-btn" href="{{ route('addAdmin') }}">Add admin</a>
    </div>
    <hr>



    <div>
        <table class="table table-responsive text-center">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                <tr>
                    <td scope="row">{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td><a href="{{route('destroyAdmin',['id'=>$admin->id])}}">Delete Admin</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection