@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>All Messages</h3>
        <a class="adding-btn" href="{{ route('admin.dashboard') }}">Back To Dashboard</a>
    </div>
    <hr>

    <div>
        <table class="table table-responsive text-center">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td scope="row">{{ $message->client_name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->message }}</td>
                    <td><a href="{{route('destroyMessage',['id'=>$message->id])}}">Delete Message</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection