<?php

use Illuminate\Database\Seeder;

class slide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['name'=>'Sản phẩm hot năm 2019','image'=>'tai.jpg'],
            ['name'=>'Sản phẩm đang sale','image'=>'tai.jpg']
        ]);
    }
}
