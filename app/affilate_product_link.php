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

 return $this->belongsTo('App\affilate_product_status', 'id', 'product_link_id');


 }



}
