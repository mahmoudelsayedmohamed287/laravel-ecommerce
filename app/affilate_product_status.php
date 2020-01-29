<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class affilate_product_status extends Model
{
  
    protected $table = 'affilate_product_status';
      protected $fillable = ['click','confirmed','date'];

}
