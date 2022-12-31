@extends('admin.master')

@section('title')
    Edit Product
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header text-center text-primary">Edit Product Form</div>
                        <div class="card-body">
                            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                            <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->name}}" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->category_name}}" class="form-control" name="category_name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->brand_name}}" class="form-control" name="brand_name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="description">{{$product->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                        <img src="{{asset($product->image)}}" alt="" height="100" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" {{$product->status == 1 ? 'checked': ''}} name="status" value="1"/> Published</label>
                                        <label><input type="radio"  {{$product->status == 0 ? 'checked': ''}} name="status" value="0"/> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
