<?php

namespace App\Http\Controllers\Web;

use App\Classes\Cart;
use App\Classes\Journey;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\LocationCity;
use App\Models\Order;
use App\Traits\Display;
use Illuminate\Http\Request;

class DropshipController extends Controller
{
    use Display;
    public function share($short)
    {
        $dropship = $short->belong;
        Journey::prefix('dropship')->whereStatus('open')->firstOr(
            function () use ($short) {
                return Journey::sign([
                    'status' => 'open',
                    'prefix' => 'dropship',
                    'link_id' => $short->id
                ]);
            }
        );
        return view($this->show('dropship.share'), compact('dropship', 'short'));
    }

    public function cart($short)
    {
        if (!Cart::count()) {
            Cart::add($short->belong_id, ['quantity' => 1]);
        }
        $cart   = Cart::cart();

        $total  = number_format(Cart::total()) . ' đ';
        return view($this->show('dropship.cart'), compact('cart', 'total', 'short'));
    }

    public function order($short)
    {
        $cart = Cart::cart();
        $total   = number_format(Cart::total()) . ' đ';
        $cities  = LocationCity::whereCountry('VN')->get();
        return view($this->show('dropship.order'), compact('cities', 'short', 'cart', 'total'));
    }


    public function orderSubmit(Request $request, $short)
    {
        $data   = $request->input();
        $data['prefix'] =   'customer';

        $order  = Cart::submit([
            'payment'   => 'COD',
            'content'   =>  $request->content,
            'ref_id'    =>  $short->auth_id,
            'link_id'    =>  $short->id,
            'customer_id'  =>  Contact::create($data)->id,
            'prefix'       =>  'dropship',
            'status'       =>  'ordered'
        ]);

        Journey::prefix('dropship')->whereStatus('ordered')->firstOr(
            function () use ($short) {
                return Journey::sign([
                    'status' => 'ordered',
                    'prefix' => 'dropship',
                    'link_id' => $short->id
                ]);
            }
        );
        return redirect()->route('dropship.order.end', [$short->short, $order]);
    }

    public function orderEnd($short, Order $order)
    {

        $items = $order->items;
        $total   = number_format($order->total) . ' đ';
        return view($this->show('dropship.end'), compact('order', 'items', 'total', 'short'));
    }
}
