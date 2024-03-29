<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTree;

class Category extends Model
{
  use HasFactory, HasTree;
  protected $guarded  = ['id'];
  protected $touches  = ['avatar'];
  protected $slug     = 'name';

  public static function findName($name)
  {
    return Category::whereName($name)->first();
  }

  public static function scopePull($query, $code, $prefix = null)
  {
    return  $query->where('code', 'like', "$code%")->wherePrefix($prefix);
  }
  public function scopeSearch($query, $search)
  {
    if (isset($search->name)) {
      $query->where('name', 'like', "%$search->name%");
    }
    return $query;
  }

  public function scopeSo($query)
  {
    return $query->orderByDesc('priority')->orderByDesc('created_at');
  }

  public function extensions(){
    return Category::select('prefix')->distinct()->whereParentId($this->id)->get();
  }

  static function boot()
  {
    parent::boot();
    static::uniqCode();
    static::deleting(function ($model) {
      $model->dropMedias();
    });
  
  }
}
