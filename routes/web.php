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
// Lấy thử thông tin
Route::get('color', [
    'as'=>'color',
    'uses'=>'homeController@color'
]);
// thử liên kết chính-ngoại
Route::get('view', [
    'as'=>'view',
    'uses'=>'homeController@view'
]);
// Liên kết ngoại-chính
Route::get('bills', [
    'as'=>'bills',
    'uses'=>'homeController@bills'
]);
// Liên kết một nhiều
Route::get('bill_detail', [
    'as'=>'bill_detail',
    'uses'=>'homeController@bill_detail'
]);
