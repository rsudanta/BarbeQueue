@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron jumb-bid"></div>
            <div class="container cont-bid">
                <div class="txt-path">
                    <a href="dashboard" style="color: #000000">Dashboard ></a>
                    <a href="tambahmerchant" style="color: #000000">Tambah Merchant ></a>
                    <a href="detailmerchant" style="color: #000000">Detail Merchant</a>
                </div>
                <h class="txt-detailM">Detail Merchant</h>
                <form method="POST" action="#">
                <div class="form-group row" style="margin-top:50px">
                    <label class="col-md-5 col-form-label text-md-left">{{ __('Nama Merchant') }}</label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="nama_merchant" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-left">{{ __('Nama Bidang') }}</label>
                    <div class="col-md-5">
                        <select class="form-control" style="border-radius: 10px" name="nama_bidang">
                            <option value=”kecantikan”>Kecantikan</option>
                            <option value=”restoran”>Restoran</option>
                            <option value=”puskesmas”>Puskesmas </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-left">{{ __('Tentang Toko') }}</label>

                    <div class="col-md-7">
                        <textarea class="form-control form-log" name=tentang_toko rows="3" cols="30" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-left">{{ __('Alamat Toko') }}</label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="alamat_toko" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5 col-form-label text-md-left">{{ __('No. Telp Toko') }}</label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="telp_toko" required>
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
                        <input type="number" class="form-control form-log" name="estimasi_antrian" required>
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
                            <input type="file" class="upload" name="img_merchant"/>
                        </div>
                    </div>
                </div>
                <div class="row row-add">
                    <button oncLick="#" class="btn-ambilAntrian">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection