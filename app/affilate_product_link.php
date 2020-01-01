<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\affilate_product_status;
class affilate_product_link extends Model
{
    //

    protected $table = 'affilate_product_link';
      protected $fillable = ['user_id','affilate_code','product_id','click','product_link','confirmed'];

  public function get_affilate_product_status(){

  return $this->hasMany('App\affilate_product_status', 'product_link_id', 'id');




 }



}
