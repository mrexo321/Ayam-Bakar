<?php

namespace App\View\Components;

use Closure;
use App\Models\Cart;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class nav extends Component
{
    /**
     * Create a new component instance.
     */

    public $cartItem;
    public function __construct($cartItem)
    {
        $this->cartItem = $cartItem;
        if (isset(auth()->user()->id)) {

            $cartItem = Cart::where('user_id', auth()->user()->id)->get();
        }
        // dd($cartItem);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = [
            'Products' => 'product',
            'Articles' => 'articles',
            'Marketplace' => 'marketplace',
            'Contact' => 'contact',
            'History' => 'history'
        ];

        // if (isset(auth()->user()->id)) {
        //     $cartItem = Cart::where('user_id', auth()->user()->id);
        // }



        return view('components.nav', compact('menus'));
    }
}
