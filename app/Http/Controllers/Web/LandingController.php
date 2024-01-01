<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class LandingController extends Controller
{

    public function widgetLinks()
    {
        $query  = Product::root()->wherePrefix('dropship')->inventory();
        $list   = $query->paginate();

        return view(
            'web.landing.widget.links',
            compact(
                'query',
                'list',
            )
        );
    }
}
