<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 123;
        $password = bcrypt($password);
        DB::table('users')->insert([
            ['name'=>'Lê Công Tài','email'=>'lecongtai1@yahoo.com.vn','image'=>'tai.jpg','password'=>$password,'phone'=>1265465465,'level'=>1],
            ['name'=>'Lê Công T','email'=>'lecongtai2@yahoo.com.vn','image'=>'tai.jpg','password'=>$password,'phone'=>1265465465,'level'=>1],
        ]);
    }
}
