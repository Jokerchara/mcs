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
    return view('dashboard');
});
Route::get('/pelanggan', function () {
    return view('pelanggan');
});

//-- Gudang --//

Route::get('/gudang', function (){
    return view('gudang');
});
Route::get('/tambahgudang', function (){
    return view('gudang.tambah');
});
Route::get('/editgudang', function (){
    return view('gudang.edit');
});
//-- Gudang --//



Route::get('/login', function () {
    return view('login');
});

Route::get('/forget', function () {
    return view('auth/forget');
});

// route::resource('forget', 'ForgetController');
// Route::get('/forget', 'ForgetController@index')->name('forget');

