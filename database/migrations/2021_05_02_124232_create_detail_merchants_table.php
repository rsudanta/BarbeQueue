<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_merchants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('bidang_id');
            $table->text('tentang');
            $table->string('alamat');
            $table->string('no_telp');
            $table->integer('estimasi_waktu');
            $table->integer('jumlah_antrian');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->string('foto_merchant')->default('foto-merchant.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_merchants');
    }
}
