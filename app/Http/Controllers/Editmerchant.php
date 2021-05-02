<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Editmerchant extends Controller
{
    public function index(){
    	return view('v_editmerchant');
    }
}