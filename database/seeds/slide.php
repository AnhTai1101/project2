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
            ['id'=>1,'name'=>'Đang sale khủng','image'=>'slide-01.jpg'],
            ['id'=>2,'name'=>'Sản phẩm hot','image'=>'slide-02.jpg'],
            ['id'=>3,'name'=>'Sản phẩm sắp về','image'=>'slide-03.jpg']
        ]);
    }
}
