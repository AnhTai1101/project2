<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $table = 'color';
    // Liên kết tới product
    public function product()
    {
        return $this->hasOne('App\color', 'color_id', 'id');
    }
    
    // Liên kết tới product_quantity
    public function product_quantity()
    {
        return $this->hasOne('App\color', 'color_id', 'id');
    }

}
