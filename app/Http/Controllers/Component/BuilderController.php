<?php

namespace App\Http\Controllers\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuilderController extends Controller
{
    

    public function work()
    {
        for($i = 1 ; $i< 11; $i++){
            $images[] = "theme/builder/$i.png"; 
        }    
        return view('builder.work',compact('images'));
    }
    public function preview()
    { 
        return view('builder.preview');
    }

}
