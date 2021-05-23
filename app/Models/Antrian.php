<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','merchant_id','no_antrian','status','antrian_sekarang_id'
    ];

    protected $table = 'antrian';

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function antrian_sekarang(){
        return $this->belongsTo(StatusAntrian::class,'antrian_sekarang_id','id');
    }

    public function detail_merchant(){
        return $this->belongsTo(DetailMerchant::class,'merchant_id','id');
    }

}
