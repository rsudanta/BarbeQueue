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
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')
    ->middleware(['auth','user'])
    ->group(function () {
        Route::get('/','UserController@index')->name('user_dashboard');
    });
Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function () {
        Route::get('/','AdminController@index')->name('admin_dashboard');
        Route::delete('/delete-bidang/{id}','AdminController@destroy_bidang')->name('admin_delete_bidang');
        Route::delete('/delete-merchant/{id}','AdminController@destroy_merchant')->name('admin_delete_merchant');
        Route::get('/tambah-bidang','BidangController@index')->name('admin_bidang');
        Route::post('/tambah-bidang','BidangController@store')->name('admin_bidang_store');
        Route::get('/tambah-merchant','AddMerchantController@index')->name('admin_merchant');
        Route::post('/tambah-merchant','AddMerchantController@register')->name('admin_merchant_register');
        Route::get('/tambah-merchant/detail/{id}','DetailMerchantController@index')->name('admin_merchant_detail');
        Route::post('/tambah-merchant/detail/{id}','DetailMerchantController@store')->name('admin_merchant_detail_store');

    });


    /* Route::prefix('merchant')
    ->middleware(['auth','merchant'])
    ->group(function () {
        Route::get('/','Dashmerchantantri@index');
    });
    */


Route::get('/merchants','MerchantPage@index');

Route::get('/','LandingPage@index')->name('landing');
Route::get('pilihmerchant','Pilihmerchant@index');
Route::get('antrian','AntrianMerchant@index');
Route::get('editmerchant','Editmerchant@index');
Route::get('userprofile','UserProfile@index');
Route::get('aktivitas','Aktivitas@index');
Route::get('dashmerchantantri','Dashmerchantantri@index');
