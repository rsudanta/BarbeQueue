<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        return view('v_tambahBidang');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_bidang' => 'file|image|mimes:jpeg,png,jpg',
            'nama_bidang' => 'required',
            'deskripsi_bidang' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        if ($request->foto_bidang != null) {
            $file = $request->file('foto_bidang');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/foto';
            $file->move($tujuan_upload, $nama_file);
        }
        else {
            $nama_file = "foto-bidang.jpg";
        }

        $data = [
            'nama_bidang' => $request->nama_bidang,
            'deskripsi_bidang' => $request->deskripsi_bidang,
            'foto_bidang' => $nama_file,
        ];

        Bidang::create($data);

        return redirect()->route('admin_dashboard');
    }
}
