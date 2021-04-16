@extends('templates.master')

@section('header')
    @include('templates.header3')
@endsection

@section('isi_page')
<div class="page-wrapper">
    <img src="{{asset('assets/images/merchant.png')}}" alt ="Merchant Pic" style="margin-top:84px">
    <div class="container cont-dMerchant">
            <p class="txt-merchantName">K-Mart</p>
            <p>One Stop Data Antrian Solution. Transform your business better. BarbeQueue simplify everything that looks so complex. One Stop Data Antrian Solution. Transform your business better. BarbeQueue simplify everything that looks so complex.</p>
                <p>Alamat : </p>
                <p style="margin-bottom: 5%">Jalan One Stop Data Antrian Solution. Transform your business better. BarbeQueue simplify everything that looks so complex. One Stop Data Antrian Solution.</p>
                <div class="row">
                    <p class="col-sm-3" style="font-weight:bold">No. Telp</p>
                    <p class="col-sm-9">(022) 4256298</p>
                </div>
                <div class="row">
                    <p class="col-sm-3" style="font-weight:bold">Jam Buka/Tutup</p>
                    <p class="col-sm-9">06:00 - 17:00</p>
                </div>
                <div class="row">
                    <p class="col-sm-3" style="font-weight:bold">Estimasi Waktu</p>
                    <p class="col-sm-9">30 Menit/Orang</p>
                </div>
                <div class="row">
                    <p class="col-sm-3" style="font-weight:bold">Status Antrian</p>
                    <p class="col-sm-9">Tersedia</p>
                </div>
                <div class="row" style="justify-content:center; margin-top:8%"> 
                    <button oncLick="#" class="btn-ambilAntrian">Ambil Antrian</button>
                </div>
    </div>
</div>
@endsection