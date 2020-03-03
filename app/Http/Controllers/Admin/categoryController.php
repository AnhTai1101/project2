<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_product;

class categoryController extends Controller
{
    public function home(){
        $category = type_product::all();
        return view('backend.listCategory')->composer('category');
    }
}
