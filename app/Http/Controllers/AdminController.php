<?php
 
namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\User;
use Illuminate\Http\Request;
 
class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('roles','MERCHANT')->get();
        $bidang = Bidang::get();

        return view('v_dashboardadmin', [
            'user' => $user,
            'bidang' => $bidang
        ]);
    }

    public function destroy_bidang($id){
        $item = Bidang::findOrFail($id);
        $item->delete();

        return redirect()->route('admin_dashboard');
    }

    public function destroy_merchant($id){
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('admin_dashboard');
    }
}