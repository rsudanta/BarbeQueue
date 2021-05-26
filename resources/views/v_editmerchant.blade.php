@extends('templates.master')

@section('title','Edit Merchant')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')

<title>Barbequeue - Edit Merchant</title>
<div class="page-wrapper">
    <div class="area">


        <div class="sidebar">
            <center>
                <img src="/storage/foto/{{Auth::user()->merchant->foto_merchant}}" alt="">
                <h4>{{Auth::user()->name}}</h4>
            </center>
            <a href="{{ route('merchant_dashboard') }}"><i class="fas fa-home"></i><span> Status Antrian</span></a>
            <a href=""><i class="fas fa-shopping-cart"></i><span> Edit Merchant</span></a>
            <a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
        </div>


        <!-- Container -->
        <div class="container cont-mer">

            <h class="txt-detailM">Edit Merchant</h>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('merchant_update', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group row" style="margin-top:50px">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Nama Merchant') }}</label>

                    <div class="col-md-5">
                        <input type="text" class="form-control" name="name" required autofocus value="{{$item->user->name}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Tentang Toko') }}</label>

                    <div class="col-md-6">
                        <textarea class="form-control form-log" name=tentang rows="3" cols="30">{{$item->tentang}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Alamat Toko') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="alamat" value="{{$item->alamat}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('No. Telp Toko') }}</label>

                    <div class="col-md-5">
                        <input type="text" class="form-control" name="no_telp" value="{{$item->no_telp}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Estimasi Waktu/Antrian') }}</label>

                    <div class="col-md-2">
                        <input type="number" class="form-control form-log" name="estimasi_waktu" value="{{$item->estimasi_waktu}}">
                    </div>

                    <div class="col-md-2">
                        <label>Menit</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Jumlah Antrian') }}</label>

                    <div class="col-md-2">
                        <input type="number" class="form-control form-log" name="jumlah_antrian" value="{{$item->jumlah_antrian}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Jam Buka/Tutup') }}</label>

                    <div class="col-md-2">
                        <input type="time" class="form-control form-log" name="jam_buka" value="{{$item->jam_buka}}">
                    </div>
                    <div class="col-md-0" style="text-align:right">
                        <label>-</label>
                    </div>
                    <div class="col-md-2">
                        <input type="time" class="form-control form-log" name="jam_tutup" value="{{$item->jam_tutup}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Foto Profil') }}</label>

                    <div class="col-md-6">
                        <div class="fileUpload btn btn-imgBid">
                            <span>Browse</span>
                            <input type="file" class="upload" name="foto_merchant" />
                        </div>
                    </div>
                </div>
                <div class="row row-update">
                    <button type="submit" class="btn-ambilAntrian">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Container -->
@endsection