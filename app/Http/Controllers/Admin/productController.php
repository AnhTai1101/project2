<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\type_info;
use App\type_product;

class productController extends Controller
{
    // trang chinh cua product
    public function index(){
        $product = product::all();
        $total = 0;
        foreach($product as $pro){
            foreach($pro->product_quantity as $quan){
                $total = $quan['quantity'] + $total;
            }

        }
        return view('backend.product2',compact('product','total'));
    }
    // detail product
    public function detail($id){
        $product = product::all();
        $total = 0;
        foreach($product as $pro){
            foreach($pro->product_quantity as $quan){
                $total = $quan['quantity'] + $total;
            }

        }
        $detail = product::where('id','=',$id)->first()->get();
        $type_product = type_product::all();
        $type_info = type_info::all();
        return view('backend.product_detail2',compact('detail','type_product','total','type_info'));
    }
    public function home(){
        $category = type_product::all();
        return view('backend.listCategory',compact('category'));
    }
}
