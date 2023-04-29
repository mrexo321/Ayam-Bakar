<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Console\View\Components\Alert;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        if ($carts->count() == 0) {
            return 'Kosong';
        }

        return view('cart.index', compact('carts'));
    }
    public function store(Request $request, Cart $keranjang)
    {

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::where('user_id', auth()->user()->id)->where('product_id', $request->input('product_id'))->first();
        $dynamicStock = Product::where('id', $request->input('product_id'))->first();

        if ($cart) {
            $cart->quantity += $request->input('quantity');
            $dynamicStock->stock -= $request->input('quantity');
            $cart->save();
            $dynamicStock->save();
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity')
            ]);

            $dynamicStock->stock -= $request->input('quantity');
            $dynamicStock->save();
        }

        return back();
    }

    public function destroy(Cart $cart, Request $request)
    {
        $destroy = Cart::where('product_id', $cart->product_id)->delete();
        $restock = Product::where('id', $cart->product_id)->first();
        if ($destroy) {
            $restock->stock += $cart->quantity;
            $restock->save();
            return back()->with('success', 'Product Berhasil Dihapus');
        }
    }

    public function checkout(Request $request)
    {
        dd('checkout');
    }
}
