@extends('admin.master')


@section('title')
    Product Table
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            All Category Information
                        </div>

                        <div class="card-body">
                            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>image</th>
                                <th>status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>
                                            <img src="{{asset($product->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('product.update-status' , ['id' => $product->id])}}" class="btn btn-success btn-sm">status</a>
                                            <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
