<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function store($id)
    {
        $no_antrian = Antrian::where('merchant_id', $id)->latest('no_antrian')->value('no_antrian');
        $no_antrian += 1;
        $check_status = Antrian::where('status', 'On Going')->get()->count();

        if ($no_antrian == 1 || $check_status == 0) {
            $status = "On Going";
        } else {
            $status = "Waiting";
        }

        $user_id = Auth::user()->id;
        $data = [
            'user_id' => $user_id,
            'merchant_id' => $id,
            'no_antrian' => $no_antrian,
            'status' => $status
        ];

        Antrian::create($data);
        return redirect()->route('user_activity');
    }


    public function done($id)
    {
        $done = [
            'status' => "Done"
        ];

        $new = [
            'status' => "On Going"
        ];

        $first = Antrian::where('status', 'Waiting')->first();
        $check = Antrian::where('status', 'Waiting')->count();
        $antri = Antrian::findOrFail($id);
        $antri->update($done);
        if($check>0){
            $first->update($new);
        }

        return redirect()->route('merchant_dashboard');
    }


    public function expire($id)
    {
        $expire = [
            'status' => "Expired"
        ];

        $new = [
            'status' => "On Going"
        ];

        $first = Antrian::where('status', 'Waiting')->first();
        $check = Antrian::where('status', 'Waiting')->count();
        $antri = Antrian::findOrFail($id);
        $antri->update($expire);
        if($check>0){
            $first->update($new);
        }

        return redirect()->route('merchant_dashboard');
    }
}
