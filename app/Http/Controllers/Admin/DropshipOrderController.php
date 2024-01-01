<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Order;

use App\Classes\Search;


class DropshipOrderController extends Controller
{

    public function index()
    {

        $search = (new Search("order_dropship"))->get();

        $query  =  Order::has('item')->wherePrefix('dropship')->search($search);
        $list = $query->paginate();

        return view(
            'admin.dropship.order.index',
            compact(
                'query',
                'list',
            )
        );
    }
    public function edit(Order $dropship_order)
    {

        return view('admin.dropship.order.edit', compact('dropship_order'));
    }
    public function update(Request $request, Order $dropship_order)
    {
      
        $data = $request->input();
        $dropship_order->update($data);
       
        if ($dropship_order->status == 'finished') {
            $sold   = $dropship_order->item->product;
            $bonus  = $sold->dropship_bonus;
            $income = $sold->price * $bonus / 100;  
            $dropship_order->ref->income($income,'dropship');
        }

        return redirect()->back()->with([
            'status' => 'success', 'message' => __('Cập nhật thành công')
        ]);
    }
}
