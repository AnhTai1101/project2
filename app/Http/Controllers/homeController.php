<?php

namespace App\Http\Controllers;
use App\color;
use App\customer;
use App\bills;
use App\bill_detail;
use App\product;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function color(){
        $color = color::all()->pluck('name','id');
        dd($color);
    }
    // Liên kết 1-1 chiều thuận
    public function view(){
        $view = customer::all();
        // dd($view);
        foreach($view as $view){
            echo $view->name;
            echo '<br>';
            echo $view->bills->id;
        }
        
    }
    // Liên kết 1-1 nghịch đảo
    public function bills(){
        $bills = bills::all();
        // dd($view);
        foreach($bills as $bills){
            echo $bills->date_order;
            echo '<br>';
            echo $bills->customer->name;
        }
        
    }

    // liên kết 1 nhiều
    public function bill_detail(){
        $bills = bills::all();
        // dd($view);
        foreach($bills as $bill){
            echo $bill->note;
            echo '<br>';
            foreach($bill->bill_detail as $bill_detail){
                echo $bill_detail->price_unit;
            }
        }
        
    }
    // test product
    public function product(){
        $product = product::all();
        foreach($product as $product){
            echo $product->name;
            echo '<br>';
            echo 'Mau: ';
            echo $product->color_id;
            echo '<br>';
            echo $product->color->name;
            // foreach($product->color as $color){
            //     echo $color->name;
            // }
            // foreach($product->size as $size){
            //     echo $size;
            // }
        }
    }
    public function hot(){
        $hot = product::where('price_unit','>','price_promotion')->select('name','id')->get()->toArray();
        dd($hot);
    }

}
