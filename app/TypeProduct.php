<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = "type_products";

    public function product(){
      // quan he nhieu 1, nhieu id cua type_product , 1 id cua product
      return $this->hasMany('App\Product','id_type','id');
    }
}
