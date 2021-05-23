<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Bidang;
use App\Models\DetailMerchant;
use App\Models\StatusAntrian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('roles', 'MERCHANT')->get();
        $bidang = Bidang::get();
        
        return view('v_dashboardadmin', [
            'user' => $user,
            'bidang' => $bidang
        ]);
    }

    public function destroy_bidang($id)
    {
        $user_id = DetailMerchant::where('bidang_id',$id)->pluck('user_id');
        $merch_id = DetailMerchant::where('bidang_id',$id)->pluck('id');
        User::whereIn('id', $user_id)->delete();
        StatusAntrian::whereIn('merchant_id', $merch_id)->delete();
        Antrian::whereIn('merchant_id', $merch_id)->delete();
        DetailMerchant::where('bidang_id',$id)->delete();

        $item = Bidang::findOrFail($id);
        $item->delete();


        return redirect()->route('admin_dashboard');
    }

    public function destroy_merchant($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        $bidang_id = DetailMerchant::where('user_id', $id)->value('bidang_id');
        $count = Bidang::where('id', $bidang_id)->value('count');
        Bidang::findOrFail($bidang_id)->update(
            [
                'count' => $count - 1
            ]
        );

        $merch_id = DetailMerchant::where('user_id',$id)->pluck('id');
        Antrian::whereIn('merchant_id', $merch_id)->delete();
        StatusAntrian::whereIn('merchant_id', $merch_id)->delete();

        $detail = DetailMerchant::where('user_id', $id);
        $detail->delete();



        return redirect()->route('admin_dashboard');
    }
}
