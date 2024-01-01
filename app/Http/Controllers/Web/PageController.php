<?php

namespace App\Http\Controllers\Web;

use App\Classes\Journey;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function home()
    {
        if (Auth::check()) return view('auth.home');
        return view('web.home');
    }

    public function lap()
    {
        //dd(Journey::current());
        $path = storage_path() . "/app/doc/demo.json";
        $screen = (object)json_decode(file_get_contents($path), true);
        $page   =   $screen->pages[0];
        $elems  =   $page['children'];
     
        return view('web.preview',compact('page','screen','elems'));
    }
   
}
