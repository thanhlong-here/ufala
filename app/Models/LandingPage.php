<?php

namespace App\Models;

use App\Traits\HasLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Media;
use App\Traits\HasMedia;

class LandingPage extends Model
{
    use HasFactory,SoftDeletes,HasLink,HasMedia;
    protected $table = 'landingpages';
    protected $guarded  = ['id'];
    
    public function category()
    {
        return  $this->belongsTo(Category::class);
    }
    
    public function avatarMobile()
    {
        return  $this->belongsTo(Media::class,'avatar_id');
    }

    
    public function avatarDesktop()
    {
        return  $this->belongsTo(Media::class,'avatar_desktop_id');
    }

    public function scopeSearch($query, $search)
    {
        if (isset($search->id)) {
            $query->where('id', '=', $search->id);
        }
        if (isset($search->token)) {
            $query->where('token', '=', $search->token);
        }
        if (isset($search->created_by)) {
            $query->where('created_by', '=', $search->created_by);
        }
        if (isset($search->device)) {
            $query->where('device', '=', $search->device);
        }

        return $query;
    }
    public function dropmedia($device='mobilde')
    {
        $this->dropMedias($device);
       
    }
    public function user_create(){
        return  $this->belongsTo(User::class,'created_by');
    }
    public function user_update(){
        return  $this->belongsTo(User::class,'updated_by');
    }
    

}
