<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class DropshipOrderController extends Controller
{



    public function index()
    {
        $query  =  Product::root()->wherePrefix('dropship')->inventory();
        $list   = $query->paginate();
       
        return view(
            'auth.dropship.index',
            compact(
                'query',
                'list',
            )
        );
     
    }


}
