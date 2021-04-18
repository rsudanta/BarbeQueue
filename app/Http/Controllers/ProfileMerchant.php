<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileMerchant extends Controller
{
    function index()
    {
        $items = Auth::user();
        return view('/', [
            'items' => $items
        ]);
    }

    function show()
    {
        $items = Auth::user();
        return view('/', [
            'items' => $items
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'file|image|mimes:jpeg,png,jpg',
            'name' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        if ($request->avatar != null) {
            $file = $request->file('avatar');

            $nama_file = time() . "_" . $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/avatars';
            $file->move($tujuan_upload, $nama_file);
        } else
            $nama_file=User::where('id', $id)->value('avatar');
        $data = [
            'name' => $request->name,
            'avatar' => $nama_file,
            'deskripsi_merchant' => $request->deskripsi_merchant,
            'alamat_merchant' => $request->alamat_merchant,
            'jam_buka_merchant' => $request->jam_buka_merchant,
            'jam_tutup_merchant' => $request->jam_tutup_merchant,
        ];
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('//');}
