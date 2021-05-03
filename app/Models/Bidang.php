<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'foto_bidang','nama_bidang'
    ];

    protected $table = 'bidang';
}