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
                <a href="tambahbidang" style="color: #000000">Tambah Bidang</a>
            </div>
                <form method="POST" action="#">
                    <div class="form-group row" style="margin-top:70px">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Nomor Bidang') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control form-reg" name="no_bidang" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Foto Bidang') }}</label>

                        <div class="col-md-8">
                            <div class="fileUpload btn btn-imgBid">
                                <span>Browse</span>
                                <input type="file" class="upload" name="img_bidang"/>
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
