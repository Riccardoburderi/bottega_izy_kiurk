<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
  protected $table = 'certificates';
  public $timestamp = true;
  protected $fillable = ['id','personal', 'animal_id','regalo','mittente','dedica','proprietario','image_big'];
  protected $primaryKey = 'id'; // or null

  public $incrementing = false;

  // In Laravel 6.0+ make sure to also set $keyType
  protected $keyType = 'string';
  public function animal()
  {
    return $this->belongsTo('App\Animal');
  }

}