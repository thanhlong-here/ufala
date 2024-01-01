<?php

namespace App\Http\Controllers\Admin;

use App\Classes\TmpMedia;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class DropshipController extends Controller
{

    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        TmpMedia::clear();

        $query  =  Product::root()->wherePrefix('dropship')->inventory();
        $list   = $query->paginate();

        $xlink = (object)[
            'create'      => route("dropships.create"),
            'categories'  => route("categories.prefix", 'dropship'),
            'supplier'    => route("contacts.prefix", 'dropship_supplier'),

        ];
        return view(
            'admin.dropship.index',
            compact(
                'query',
                'list',
                'xlink',
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

        if (session('status', null) == 'success') {
            echo "<script>parent.location.reload();</script>";
            exit;
        }

        $suppliers = Contact::wherePrefix('dropship_supplier')->get();
        return view('admin.dropship.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $dropship = Product::create($data);
        TmpMedia::move($dropship);

        return redirect()->route('dropships.edit', $dropship)->with([
            'status' => 'success', 'message' => __('Thông tin sản phẩm đã được tạo')
        ]);
    }

    /**
     * Create Order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $dropship)
    {
        if (session('status', null) == 'success') {
            echo "<script>parent.location.reload();</script>";
            exit;
        }

        $start_at = date('Y-m-d', strtotime($dropship->dropship_start_at));
        $end_at   = date('Y-m-d', strtotime($dropship->dropship_end_at));
        $status   = $dropship->status;
        $suppliers = Contact::wherePrefix('dropship_supplier')->get();
        return view('admin.dropship.edit', compact('dropship', 'suppliers', 'start_at', 'end_at', 'status'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $dropship)
    {
        $data = $request->input();
        $dropship->update($data);
        TmpMedia::move($dropship);
        return redirect()->back()->with([
            'status' => 'success', 'message' => __('Thông tin cập nhật thành công')
        ]);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return  redirect()->back()->with('toatr', ['status' => 'success', 'message' => __('Sản phẩm đã xóa')]);
    }
}
