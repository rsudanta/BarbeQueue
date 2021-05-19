<?php
 
namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Bidang;
use App\Models\DetailMerchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $bidang = Bidang::get();

        return view('v_dashboard', [
            'bidang' => $bidang
        ]);
    }

    public function show($id){
        
        $items=DetailMerchant::where('bidang_id',$id)->get();
        return view('v_pilihmerchant',[
            'items'=>$items
        ]);
    }

    public function merchant($id){
        $items=DetailMerchant::where('id',$id)->first();
        return view('v_merchant',[
            'items'=>$items
        ]);
    }
    public function profil()
    {
        return view('v_userProfile', [
            
        ]);
    }
    public function aktivitas()
    {
        $ongoing = Antrian::where('user_id',Auth::id())->where('status','On Going')->orWhere('status','Waiting')->get();
        $done = Antrian::where('user_id',Auth::id())->where('status','Done')->orWhere('status','Expired')->get();
        return view('v_aktivitas',[
            'ongoing'=>$ongoing,
            'done'=>$done
        ]);
    }

}