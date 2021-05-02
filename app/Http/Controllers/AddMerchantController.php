<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddMerchantController extends Controller
{
    public function index(){
        return view('v_tambahMerchant');
    }

    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $id =User::orderBy('id', 'desc')->take(1)->first()->id;

        return redirect()->route('admin_merchant_detail',$id);
    }
}
