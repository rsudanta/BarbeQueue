<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Dashboardadmin extends Controller
{
    public function index(){
    	return view('v_dashboardadmin');
    }
}