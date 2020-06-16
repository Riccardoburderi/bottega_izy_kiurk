<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  protected $table = 'animals';
  public $timestamp = true;

  protected $fillable = ['name', 'price','recipe','code','birthday','image','description','subcategory_id'];

  public function subcategory()
  {
    return $this->belongsTo('App\Subcategory');
  }

  public function certificate()
  {
      return $this->hasOne('App\Certificate');
  }

}