@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>All Clients</h3>
        <a class="adding-btn" href="{{ route('addClient') }}">Add client</a>
    </div>
    <hr>



    <div>
        <table class="table table-responsive text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td scope="row"><img src="{{ asset($client->image) }}">
                    </td>
                    <td><a href="{{route('destroyClient',['id'=>$client->id])}}">Delete Client</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection