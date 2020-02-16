<?php

use Illuminate\Database\Seeder;

class news extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
            'title'=>'Sinh viên',
            'content'=>'Chuyên mục khuyến mại',
            'description'=>'Danh mục này chỉ dành cho học sinh',
            'time'=>'2019-12-25',
            'image'=>'tai.jpg']
        ]);
    }
}
