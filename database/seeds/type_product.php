<?php

use Illuminate\Database\Seeder;

class type_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_product')->insert([
            ['name'=>'Phụ nữ','description'=>'Dành cho giới tính nữ','image'=>'tai.jpg','title'=>'Là sản phẩm']
        ]);
    }
}
