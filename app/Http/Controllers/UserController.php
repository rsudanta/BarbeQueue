<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Bidang;
use App\Models\DetailMerchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $bidang = Bidang::get();

        return view('v_dashboard', [
            'bidang' => $bidang
        ]);
    }

    public function show($id)
    {

        $items = DetailMerchant::where('bidang_id', $id)->get();
        return view('v_pilihmerchant', [
            'items' => $items
        ]);
    }

    public function merchant($id)
    {
        $items = DetailMerchant::where('id', $id)->first();
        return view('v_merchant', [
            'items' => $items
        ]);
    }
    public function profil()
    {
        return view('v_userProfile');
    }
    public function aktivitas()
    {
        $ongoing = Antrian::where('user_id', Auth::id())->where(function ($q) {
            $q->where('status', 'On Going')
                ->orWhere('status', 'Waiting');
        })->get();
        $done = Antrian::where('user_id', Auth::id())->where(function ($q) {
            $q->where('status', 'Done')
                ->orWhere('status', 'Expired');
        })->get();
        return view('v_aktivitas', [
            'ongoing' => $ongoing,
            'done' => $done
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'foto_user' => 'file|image|mimes:jpeg,png,jpg',
            'name' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        if ($request->foto_user != null) {
            $file = $request->file('foto_user');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/foto';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = User::where('id', $id)->value('foto_user');
        }

        $data = [
            'name' => $request->name,
            'foto_user' => $nama_file,
            'no_hp' => $request->no_hp,
        ];

        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('user_profile');
    }


    public function changePassword(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }
        if (!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0) {
            //New password and confirm password are not same
            return redirect()->back()->with("error", "New Password should be same as your confirmed password. Please retype new password.");
        }
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('user_profile');
    }
}
