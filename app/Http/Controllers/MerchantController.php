<?php

namespace App\Http\Controllers;

use App\Models\DetailMerchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index($id){
        $items=DetailMerchant::where('id',$id)->first();
        return view('v_merchant',[
            'items'=>$items
        ]);
    }
}
