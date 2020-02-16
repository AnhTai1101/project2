<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('users/{id}', function ($id) {
    Route::get('users/'.$id, [
        'as'=>$id,
        'uses'=>'homeController@'.$id
    ]);
    
});
Route::get('color', [
    'as'=>'color',
    'uses'=>'homeController@color'
]);
