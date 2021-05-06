<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\DetailMerchant;
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
        $item = Bidang::findOrFail($id);
        $item->delete();

        DetailMerchant::where('bidang_id',$id)->delete();

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

        $detail = DetailMerchant::where('user_id', $id);
        $detail->delete();



        return redirect()->route('admin_dashboard');
    }
}
