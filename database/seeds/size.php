<?php

use Illuminate\Database\Seeder;

class size extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->insert([
            ['name'=>'M'],
            ['name'=>'L'],
            ['name'=>'X'],
            ['name'=>'XX'],
            ['name'=>'XXX'],
            ['name'=>'XL'],
        ]);
    }
}
