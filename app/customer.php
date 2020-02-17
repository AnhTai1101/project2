<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    //Liên kết 1 - 1 từ chính tới ngoại
    // vì một người dùng chỉ có 1 tổng hóa đơn
    public function bills()
    {
        return $this->hasOne('App\bills', 'customer_id', 'id');
    }
}
