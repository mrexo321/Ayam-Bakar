<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'total' => 'required|integer',
        ]);


        $checkout = Invoice::create([
            'user_id' => auth()->user()->id,
            'total' => $request->total,
        ]);

        if ($checkout) {
            Cart::where('user_id', auth()->user()->id)->delete();
        }

        return redirect('/')->with('success', 'Checkout Berhasil');
    }
}
