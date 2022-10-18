<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//ini string
Route::get('coba', function(){
    return "hallo nisrin";
});

//array
Route::get('coba1', function(){
    return ['aku', 'kamu'];
});

//object json
Route::get('coba2', function(){
    return[
        "Nama" => "Nisrina A",
        "Kelas" => "XII RPL 5",
        "NIS" => 123456
    ];
});

//OBJEK JSON
Route::get('coba3', function(){
    return response()->json(
        [
            "Nama" => "Nisrina A",
            "Kelas" => "XII RPL 5",
            "NIS" => 123456
        ], 201
        );
});