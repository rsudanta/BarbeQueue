<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\DetailMerchant;
use App\Models\User;

class DetailMerchantController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc')->take(1)->first();
        $bidang = Bidang::get();

        return view('v_detailMerchant', [
            'user' => $user,
            'bidang' => $bidang
        ]);
    }

    public function store(Request $request, $id)
    {
        $fields = $request->validate([
            'bidang_id' => 'required',
            'tentang' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'estimasi_waktu' => 'required',
            'jumlah_antrian' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'foto_merchant' => 'file|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->foto_merchant != null) {
            $file = $request->file('foto_merchant');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/foto';
            $file->move($tujuan_upload, $nama_file);
        }
        else {
            $nama_file = "foto-merchant.jpg";
        }

        DetailMerchant::create([
            'user_id' => $id,
            'bidang_id' => $fields['bidang_id'],
            'tentang' => $fields['tentang'],
            'alamat' => $fields['alamat'],
            'no_telp' => $fields['no_telp'],
            'estimasi_waktu' => $fields['estimasi_waktu'],
            'jumlah_antrian' => $fields['jumlah_antrian'],
            'jam_buka' => $fields['jam_buka'],
            'jam_tutup' => $fields['jam_tutup'],
            'foto_merchant' => $nama_file
        ]);

        return redirect()->route('admin_dashboard');

    }
}
