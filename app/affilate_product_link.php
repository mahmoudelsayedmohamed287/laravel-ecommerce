<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class affilate_product_link extends Model
{
    //

    protected $table = 'affilate_product_link';
      protected $fillable = ['user_id','affilate_code','product_id','click','product_link','confirmed'];


}
