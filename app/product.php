<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    // Liên kết tới bill_detail
    public function bill_detail()
    {
        return $this->hasOne('App\bill_detail', 'product_id', 'id');
    }
    // Liên kết đến product_quantity
    public function product_quantity()
    {
        return $this->hasOne('App\product_quantity', 'product_id', 'id');
    }
    // Liên kết tới type_info
    public function type_info()
    {
        return $this->belongsTo('App\info', 'info_id', 'id');
    }
    // liên kết tới type_product
    public function type_product()
    {
        return $this->belongsTo('App\type_product', 'product_id', 'id');
    }
    // Liên kết tới size
    public function size()
    {
        return $this->belongsTo('App\size', 'size_id', 'id');
    }
    // liên kết tới color
    public function color()
    {
        return $this->belongsTo('App\color', 'color_id', 'id');
    }
}
