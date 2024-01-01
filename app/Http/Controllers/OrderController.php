<?php

namespace App\Http\Controllers;

use App\Classes\Search;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($prefix = null)
  {
    $search = (new Search("order_$prefix"))->get();
    $query  =  Order::wherePrefix($prefix)->search($search);
    $list = $query->paginate();
    return view(
      'admin.order.index',
      compact(
        'query',
        'prefix',
        'list',
      )
    );
  }

  public function dropship()
  {
    $search = (new Search("order_dropship"))->get();

    $query  =  Order::has('item')->wherePrefix('dropship')->search($search);
    $list = $query->paginate();

    return view(
      'admin.order.dropship',
      compact(
        'query',
        'list',
      )
    );
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function show(Order $order)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function edit(Order $order)
  {
    return view('admin.order.edit', compact('order'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Order $order)
  {
    $data = $request->input();
    $order->update($data);
    /*
    if($order->status == 'finished'){
      if($order->ref){
        $ref  = $order->ref;
        
      }
    }
    */
    return redirect()->back()->with([
      'status' => 'success', 'message' => __('Cập nhật thành công')
    ]);
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function destroy(Order $order)
  {
    $order->delete();
    return redirect()->back()->with([
      'status' => 'success', 'message' => __('Xóa đơn hàng thành công')
    ]);
  }
}
