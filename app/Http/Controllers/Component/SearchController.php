<?php

namespace App\Http\Controllers\Component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Search;

class SearchController extends Controller
{
    protected $name =  '__search';
    public function find($model, Request $request)
    {
        $search =   new Search($model);    
        $search->set($request->input());
        
        return redirect()->back();
    }
}
