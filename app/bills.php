<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $table = 'bills';
    // liên kết nghịch 1-1 tới bảng customer
    public function customer()
    {
        return $this->belongsTo('App\customer', 'customer_id', 'id');
    }
    // Liên kết tới bảng bill_detail
    public function bill_detail()
    {
        return $this->hasMany('App\bill_detail', 'bill_id', 'id');
    }
}
