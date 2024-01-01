<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Traits\Belong;

class Media extends Model
{
    use HasFactory, Belong;
    protected $guarded = ['id'];

    static function disk()
    {
        return Storage::disk('media');
    }

    public function change($media)
    {
        $name =  uniqid() . '.' . $media->getClientOriginalExtension();
        $path =  $media->storeAs('media', $name);
        if ($path) {
            static::disk()->delete($this->name);
            $this->update([
                'name'  => $name,
                'path'  => $path
            ]);
        }
    }

    public static function up($media, $model = null, $prefix = null)
    {
        $name =  uniqid() . '.' . $media->getClientOriginalExtension();
        $path =  $media->storeAs('media', $name);
        if ($path) {
            $data    =  [
                'name'         =>  $name,
                'path'         =>  $path,
                'prefix'       =>  $prefix,
            ];
            if($model){
                $data =  array_merge($data,[
                    'belong_type'  =>  get_class($model),
                    'belong_id'    =>  $model->id,
                ]);
            }
            return static::create($data);
        }
    }

    static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            static::disk()->delete($model->name);
        });
    }
}
