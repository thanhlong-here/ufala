<?php

namespace App\Http\Controllers\Component;

use App\Classes\TmpMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Media;

class UploadController extends Controller
{
    public function tmp(Request $request)
    {
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $media = TmpMedia::up($file);
                $res[] = [
                    'id' => $media->id,
                    'path' => asset($media->path)
                ];
            }
            return  $res;
        }
    }
    public function remove(Media $media)
    {
        return $media->delete();
    }
}
