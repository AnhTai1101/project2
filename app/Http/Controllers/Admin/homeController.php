<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class homeController extends Controller
{
    public function home(){
        return view('backend.home');
    }
    // Logout
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
