<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(Product $product)
    {
        $products = Product::latest()->limit(3)->get();
        return view('index', compact('products'));
    }
}
