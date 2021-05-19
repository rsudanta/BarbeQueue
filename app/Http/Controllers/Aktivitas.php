<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Aktivitas extends Controller
{
    public function index(){
        $items = Antrian::where('user_id',Auth::id())->where('status','Waiting')->get();
        return view('v_aktivitas',[
            'items'=>$items
        ]);
    }
}
