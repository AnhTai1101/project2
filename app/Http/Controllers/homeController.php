<?php

namespace App\Http\Controllers;
use App\color;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function color(){
        $color = color::all()->pluck('name','id');
        dd($color);
    }
}
