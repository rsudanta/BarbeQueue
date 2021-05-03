@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
      <div class="area">

      
      <div class="sidebar">
        <center>
        <img src="{{asset('assets/images/logo.png')}}"  alt="">
        <h4>Merchant <br> Kecantikan </h4>
        </center>
        <a href=""><i class="fas fa-home"></i><span> Status Antrian</span></a>
        <a href=""><i class="fas fa-shopping-cart"></i><span> Edit Merchant</span></a>
        <a href=""><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
      </div>
     

      <!-- Container -->
      <div class="container cont-mer">

      <h class="txt-detailM">Edit Merchant</h>
     
      <div class="form-group row" style="margin-top:50px">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Nama Merchant') }}</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" name="nama_merchant" required autofocus value="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Tentang Toko') }}</label>

                <div class="col-md-6">
                    <textarea class="form-control form-log" name=tentang rows="3" cols="30" required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Alamat Toko') }}</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('No. Telp Toko') }}</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" name="no_telp" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Estimasi Waktu/Antrian') }}</label>

                <div class="col-md-2">
                    <input type="number" class="form-control form-log" name="estimasi_waktu" required>
                </div>

                <div class="col-md-2">
                    <label>Menit</label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Jam Buka/Tutup') }}</label>

                <div class="col-md-2">
                    <input type="time" class="form-control form-log" name="jam_buka" required>
                </div>
                <div class="col-md-0" style="text-align:right">
                    <label>-</label>
                </div>
                <div class="col-md-2">
                    <input type="time" class="form-control form-log" name="jam_tutup" required>
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
                <button class="btn-ambilAntrian">Update</button>
            </div>
          
      </div>
      </div>
  </div>
    <!-- End Container -->   
@endsection