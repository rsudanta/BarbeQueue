@extends('templates.master')

@section('title','Info Merchant')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')

<title>Barbequeue - Merchant</title>
<div class="page-wrapper">
    <img src="/storage/foto/{{$items->foto_merchant}}" alt="Merchant Pic" class="img-merchantDetail">
    <div class="container cont-dMerchant">
        <div class="txt-path">
            <a href="{{route('user_dashboard')}}" style="color: #000000">Dashboard ></a>
            <a href="#" style="color: #000000">Merchant ></a>
            <a style="color: #000000">{{$items->user->name}}</a>
        </div>
        <p class="txt-merchantName">{{$items->user->name}}</p>
        <p>{{$items->tentang}}</p>
        <p>Alamat : </p>
        <p style="margin-bottom: 5%">{{$items->alamat}}</p>
        <div class="row">
            <p class="col-sm-3" style="font-weight:bold">No. Telp</p>
            <p class="col-sm-9">{{$items->no_telp}}</p>
        </div>
        <div class="row">
            <p class="col-sm-3" style="font-weight:bold">Jam Buka/Tutup</p>
            <p class="col-sm-9">{{$items->jam_buka}} - {{$items->jam_tutup}}</p>
        </div>
        <div class="row">
            <p class="col-sm-3" style="font-weight:bold">Estimasi Waktu</p>
            <p class="col-sm-9">{{$items->estimasi_waktu}} Menit/Orang</p>
        </div>
        <div class="row">
            <p class="col-sm-3" style="font-weight:bold">Status Antrian</p>
            <p class="col-sm-9">Tersedia</p>
        </div>
        <form action="{{ route('antrian_store', $items->id) }}" method="POST">
            @csrf
            <div class="row" style="justify-content:center; margin-top:8%">
                <button oncLick="" class="btn-ambilAntrian">Ambil Antrian</button>
            </div>
        </form>
    </div>
</div>
@endsection