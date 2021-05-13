<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function store($id)
    {
        if(Antrian::where('merchant_id', $id) == null){
            $no_antrian = 1;
        }
        else if (Antrian::where('merchant_id',$id) != null){
            $no_antrian = Antrian::where('merchant_id',$id)->value('no_antrian');
            $no_antrian +=1;
        }
        $user_id = Auth::user()->id;
        $data = [
            'user_id' => $user_id,
            'merchant_id'=>$id,
            'no_antrian'=>$no_antrian,
            'status'=>"On Going"
        ];

        Antrian::create($data);
        return redirect()->route('user_dashboard');
    }
}
