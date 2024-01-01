<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Classes\Cart;
use App\Classes\Journey;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{

    function change(Request $request)
    {
        $qty = $request->qty;
        $key = $request->key;

        if ($qty > 0) {
            $items  = Cart::cart();
            $items[$key]->quantity = $qty;
            Cart::update($items);
        }
        $total = Cart::total();
        return response()->json([
            'cart'     => Cart::cart(),
            'total'    => $total,
            'total_format' =>  number_format($total).' đ'
        ], 200);
    }

}
