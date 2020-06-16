<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $table = 'subcategories';
  public $timestamp = true;
  protected $fillable = ['name', 'description','category_id'];


  public function category()
  {
    return $this->belongsTo('App\Category');
  }

}