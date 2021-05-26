@extends('templates.master')

@section('title','Add Detail Merchant')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<title>Barbequeue - Detail Merchant</title>
<div class="page-wrapper">
    <div class="jumbotron jumb-bid"></div>
    <div class="container cont-bid">
        <div class="txt-path">
            <a href="{{route('admin_dashboard')}}" style="color: #000000">Dashboard ></a>
            <a href="{{route('admin_merchant')}}" style="color: #000000">Tambah Merchant</a>
        </div>
        <h class="txt-detailM">Detail Merchant</h>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('admin_merchant_detail_store', $user->id)}}" enctype="multipart/form-data">
        @csrf

            <div class="form-group row" style="margin-top:50px">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Nama Merchant') }}</label>

                <div class="col-md-7">
                    <input type="text" class="form-control" name="nama_merchant" required autofocus value="{{ $user->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Nama Bidang') }}</label>
                <div class="col-md-5">
                    <select class="form-control" style="border-radius: 10px" name="bidang_id">
                        @foreach($bidang as $bidang)
                        <option value="{{$bidang->id}}">{{$bidang->nama_bidang}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Tentang Toko') }}</label>

                <div class="col-md-7">
                    <textarea class="form-control form-log" name=tentang rows="3" cols="30" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Alamat Toko') }}</label>

                <div class="col-md-7">
                    <input type="text" class="form-control" name="alamat" required value="{{ old('alamat') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('No. Telp Toko') }}</label>

                <div class="col-md-7">
                    <input type="text" class="form-control" name="no_telp" value="{{ old('no_telp') }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Estimasi Waktu/Antrian') }}</label>
                
                <div class="row" style="padding-left:15px">
                    <div class="col-md-5">
                        <input type="number" min="0" class="form-control form-log" name="estimasi_waktu" value="{{ old('estimasi_waktu') }}" required>
                    </div>

                    <div class="col-md-4">
                        <label>Menit</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Jumlah Antrian/Hari') }}</label>

                <div class="row" style="padding-left:15px">
                    <div class="col-md-5">
                        <input type="number" min="0" class="form-control form-log" name="jumlah_antrian" value="{{ old('jumlah_antrian') }}" required>
                    </div>

                    <div class="col-md-4">
                        <label>Antrian</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Jam Buka/Tutup') }}</label>

                <div class="row" style="padding-left:15px">
                    <div class="col-md-5">
                        <input type="time" class="form-control form-log" name="jam_buka" value="{{ old('jam_buka') }}" required>
                    </div>
                    <div class="col-md-2" style="text-align:right">
                        <label>-</label>
                    </div>
                    <div class="col-md-5">
                        <input type="time" class="form-control form-log" name="jam_tutup" value="{{ old('jam_tutup') }}"required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Foto Profil') }}</label>

                <div class="col-md-7">
                    <div class="fileUpload btn btn-imgBid">
                        <span>Browse</span>
                        <input type="file" class="upload" name="foto_merchant" />
                    </div>
                </div>
            </div>
            <div class="row row-add">
                <button class="btn-ambilAntrian">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection