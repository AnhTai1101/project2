<?php

use Illuminate\Database\Seeder;

class type_info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_info')->insert([
            ['name'=>'Quần dài','description'=>'Không có gì','image'=>'tai.jpg','title'=>'Là sản phẩm']
        ]);
    }
}
