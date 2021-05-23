<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAntrian extends Model
{
    use HasFactory;

    protected $table = 'status_antrian';

    protected $fillable = [
        'merchant_id','no_antrian_sekarang'
    ];

    public function merchant(){
        return $this->belongsTo(DetailMerchant::class,'merchant_id','id');
    }
}
