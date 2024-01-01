<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $reg  = [
        'name'    => 'required|string|min:3',
        'avatar'  => 'max:1024',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($prefix = null)
    {
        $query  =  Product::root()->wherePrefix($prefix)->inventory();
        $list   = $query->paginate();
       
        $xlink = (object)[
            'create'      => route("products.create", ['prefix' => $prefix]),
            'categories'  => route("categories.prefix", $prefix),
            'supplier'    => route("contacts.prefix", $prefix),
        ];

        return view(
            'admin.product.index',
            compact(
                'query',
                'prefix',
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
        return view('admin.product.create');
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
        $product = Product::create($data);
        if ($request->hasFile('avatar')) {
            $product->upAvatar($request->avatar);
        }


        return redirect()->route('products.edit', $product)->with('toastr', [
            'status' => 'success', 'message' => 'Record created!'
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
    public function edit(Product $product)
    {
        session(['menuOpenSub' => 'product']);
        return view('admin.product.edit', compact('product'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->data = $request->input();
        $product->update($this->data);

        if ($request->hasFile('avatar')) {
            $product->storeAvatar($request->avatar);
        }
        return redirect()->back()->with('toastr', [
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
