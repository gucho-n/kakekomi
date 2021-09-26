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
//画面を表示させる記述
Route::get('/', function () {
    return view('main');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/makereview',function(){
    return view('makereview');
});

