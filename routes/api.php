<?php

use App\Models\Bidang;
use App\Models\DetailMerchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/merchant',function(){
    return DetailMerchant::all();
});
Route::get('/bidang',function(){
    return Bidang::all();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
