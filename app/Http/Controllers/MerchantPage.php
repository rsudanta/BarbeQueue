<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantPage extends Controller
{
    public function index(){
        return view('v_merchant');
    }
}
