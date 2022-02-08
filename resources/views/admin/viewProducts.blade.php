@extends('includes.adminLayout')

@section('adminContent')

<div class="container-fluid">
    <div class="row admin-page justify-content-between">
        <h3>All Products</h3>
        <a class="adding-btn" href="{{ route('addProduct') }}">Add product</a>
    </div>
    <hr>



    <div>
        <table class="table table-responsive text-center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td scope="row"><img src="{{ asset($product->image ) }}">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td><a href="{{route('destroyProduct',['id'=>$product->id])}}">Delete Product</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection