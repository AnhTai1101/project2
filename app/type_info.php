<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_info extends Model
{
    protected $table = 'type_info';
    // liên kết tới product
    public function product()
    {
        return $this->hasOne('App\product', 'product_id', 'id');
    }
}
