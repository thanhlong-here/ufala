<?php

namespace App\Traits;

use App\Models\Media;

trait HasMedia
{
    public function medias()
    {
        return $this->morphMany(Media::class, 'belong');
    }

    public function avatar()
    {
        return  $this->belongsTo(Media::class);
    }

    public function storeMedia($media, $prefix = null)
    {
        return Media::up($media, $this, $prefix);
    }


    public function storeAvatar($media)
    {
        if ($this->avatar) {
            $this->avatar->change($media);
        } else {
            $this->update([
                'avatar_id' =>  $this->storeMedia($media)->id,
            ]);
        }
    }

    public function dropMedias() 
    {
        foreach ($this->medias as $media) {
            $media->delete();
        }
    }
}
