@extends('templates.master')

@section('header')
@include('templates.header2')
@endsection

@section('isi_page')
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
                    <input type="text" class="form-control" name="alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('No. Telp Toko') }}</label>

                <div class="col-md-7">
                    <input type="text" class="form-control" name="no_telp" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Estimasi Waktu/Antrian') }}</label>

                <div class="col-md-3">
                    <input type="number" class="form-control form-log" name="estimasi_waktu" required>
                </div>

                <div class="col-md-3">
                    <label>Menit</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Jumlah Antrian/Hari') }}</label>

                <div class="col-md-3">
                    <input type="number" class="form-control form-log" name="jumlah_antrian" required>
                </div>

                <div class="col-md-3">
                    <label>Antrian</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-left">{{ __('Jam Buka/Tutup') }}</label>

                <div class="col-md-3">
                    <input type="time" class="form-control form-log" name="jam_buka" required>
                </div>
                <div class="col-md-1" style="text-align:right">
                    <label>-</label>
                </div>
                <div class="col-md-3">
                    <input type="time" class="form-control form-log" name="jam_tutup" required>
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