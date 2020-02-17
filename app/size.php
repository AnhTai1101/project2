<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $table = 'size';
    // Liên kết tới product
    public function product()
    {
        return $this->hasOne('App\size', 'size_id', 'id');
    }
    // Liên kết tới product_quantity
    public function product_quantity()
    {
        return $this->hasOne('App\size', 'size_id', 'id');
    }
}
