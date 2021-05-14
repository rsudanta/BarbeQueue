<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\DetailMerchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
    public function index()
    {
        $ongoing =Antrian::where('merchant_id', Auth::user()->merchant->id)->where('status','On Going')->first();
        $waitings=Antrian::where('merchant_id', Auth::user()->merchant->id)->where('status','Waiting')->get();
        return view('v_dashmerchantantri',[
            'waitings'=>$waitings,
            'ongoing'=>$ongoing
        ]);
    }

    public function edit($id)
    {
        $item = DetailMerchant::where('user_id', $id)->first();

        return view('v_editmerchant', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
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
        } else {
            $nama_file=DetailMerchant::where('user_id', $id)->value('foto_merchant');
        }

        $nama=[
            'name' => $request->name,
        ];

        $data = [
            'tentang' => $request->tentang,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'estimasi_waktu' => $request->estimasi_waktu,
            'jumlah_antrian' => $request->jumlah_antrian,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup,
            'foto_merchant' => $nama_file
        ];

        $item = User::findOrFail($id);
        $item->update($nama);

        $items = DetailMerchant::where('user_id', $id);
        $items->update($data);

        return redirect()->route('merchant_dashboard');
    }
}
