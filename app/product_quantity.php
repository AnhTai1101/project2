<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_quantity extends Model
{
    protected $table = 'product_quantity';
    // Liên kết tới bảng product
    public function product()
    {
        return $this->belongsTo('App\product', 'product_id', 'id');
    }
    public function size()
    {
        return $this->belongsTo('App\size', 'size_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo('App\color', 'color_id', 'id');
    }
}
