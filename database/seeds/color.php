<?php

use Illuminate\Database\Seeder;

class color extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color')->insert([
            ['name'=>'Đen'],
            ['name'=>'Đen Nhám'],
            ['name'=>'Nâu'],
            ['name'=>'Đỏ'],
            ['name'=>'Xanh lá'],
            ['name'=>'Xanh Dương'],
            ['name'=>'Trắng'],
            ['name'=>'Hồng cánh sen'],
        ]);
    }
}
