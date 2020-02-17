<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = 'bill_detail';
    public function bills()
    {
        return $this->belongsTo('App\bills', 'bill_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\product', 'product_id', 'id');
    }

}

