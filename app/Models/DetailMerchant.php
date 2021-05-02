<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMerchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bidang_id', 'tentang', 'alamat', 'no_telp', 'estimasi_waktu', 'jumlah_antrian', 'jam_buka', 'jam_tutup', 'foto_merchant'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function bidang(){
        return $this->belongsTo(Bidang::class,'bidang_id','id');
    }
}
