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

Auth::routes();

Route::get('/','LandingPage@index');
Route::get('dashboard','Dashboard@index');
Route::get('pilihmerchant','Pilihmerchant@index');
Route::get('merchant','MerchantPage@index');
Route::get('antrian','AntrianMerchant@index');
Route::get('tambahbidang','TambahBidang@index');
Route::get('tambahmerchant','TambahMerchant@index');
Route::get('detailmerchant','DetailMerchant@index');
Route::get('dashboardadmin','Dashboardadmin@index');