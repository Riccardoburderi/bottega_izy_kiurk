<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';
  public $timestamp = true;
  protected $fillable = ['name', 'ricetta'];


  public function subcategory()
  {
    return $this->hasMany('App\Subcategory');
  }

}