<?php

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            ['name'=>'Le Cong Tai','gender'=>1,'email'=>'lecongtai@yahoo.com.vn','image'=>'tai.jpd','address'=>'Chương Mỹ, Hà Nội','note'=>'Không có ghi chép gì thêm','phone'=>'0901102893']
        ]);
    }
}
