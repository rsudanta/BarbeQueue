<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Pilihmerchant extends Controller
{
    public function index(){
    	return view('v_pilihmerchant');
    }
}