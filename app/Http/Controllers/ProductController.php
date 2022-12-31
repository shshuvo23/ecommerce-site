<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create(Request $request)
    {
        Product::createProduct($request);
        return redirect('/product/add')->with('message', 'Product Added Successfully');
    }

    public function manage()
    {
        return view('admin.product.manage', ['products' => Product::orderBy('id', 'desc')->get()]);
    }
    public function edit($id)
    {
        return view('admin.product.edit', ['product' => Product::find($id)]);
    }
    public function updateStatus($id)
    {
        return redirect()->back()->with('message', Product::updateProductStatus($id));
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'Updated Successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product/manage')->with('message', 'Deleted');
    }
}
