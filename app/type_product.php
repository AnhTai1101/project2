<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table = 'type_product';
    // liên kết tới product
    public function product()
    {
        return $this->hasOne('App\product', 'product_id', 'id');
    }
}
