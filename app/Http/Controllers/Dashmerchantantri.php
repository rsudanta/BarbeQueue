<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Dashmerchantantri extends Controller
{
    public function index(){
    	return view('v_dashmerchantantri');
    }
}