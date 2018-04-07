<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Product extends Model
{
  protected $table = "products";

  public function type_product(){
    // quan he 1 nhieum 1 id_type cua product co nhieu id cua type_product
    return $this->belongsTo('App\TypeProduct','id_type','id');
  }

  public function bill_detail(){
    // quan he 1 nhieum 1 id_type cua product co nhieu id cua type_product
    return $this->hasMany('App\BillDetail','id_product','id');
  }
}
