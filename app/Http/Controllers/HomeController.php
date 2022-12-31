<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['products' => Product::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),]);
    }

    public function product()
    {
        return view('website.product.index', [
            'products' => Product::where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
        ]);
    }
    public function detail($id)
    {
        return view('website.product.detail', ['product' => Product::find($id)]);
    }

}
