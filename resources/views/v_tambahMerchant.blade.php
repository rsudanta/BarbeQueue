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
                <a href="tambahmerchant" style="color: #000000">Tambah Merchant</a>
            </div>
                <form method="POST" action="#">
                    <div class="form-group row" style="margin-top:70px">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Email Merchant') }}</label>

                        <div class="col-md-8">
                            <input type="email" class="form-control form-reg" name="email_merchant" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input type="password" class="form-control form-reg" name="pwd_merchant" required>
                        </div>
                    </div>
  
                    <div class="row row-add">
                        <button oncLick="#" class="btn-ambilAntrian">Next</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
