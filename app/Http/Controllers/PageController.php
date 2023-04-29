<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(Product $product)
    {
        $products = Product::get()->take(9);
        return view('index', compact('products'));
    }

    public function contact()
    {
        return view('contact.index');
    }
}
