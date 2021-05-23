@extends('templates.master')

@section('title','Tambah Merchant')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<title>Barbequeue - Tambah Merchant</title>
<div class="page-wrapper">
    <div class="jumbotron jumb-bid"></div>
    <div class="container cont-bid">
        <div class="txt-path">
            <a href="{{route('admin_dashboard')}}" style="color: #000000">Dashboard ></a>
            <a href="{{route('admin_merchant')}}"href="tambahmerchant" style="color: #000000">Tambah Merchant</a>
        </div>
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
        <form method="POST" action="{{ route('admin_merchant_register') }}">
            @csrf
            <div class="form-group row" style="margin-top:70px">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Merchant Name') }}</label>

                <div class="col-md-8">
                    <input type="text" class="form-control form-reg" style="width:400px" name="name"  autofocus placeholder="Merchant Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Email Merchant') }}</label>

                <div class="col-md-8">
                    <input type="email" class="form-control form-reg" name="email"  autofocus  placeholder="Email Merchant">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                <div class="col-md-8">
                <input id="password" type="password" minlength="8" class="form-control form-reg @error('password') is-invalid @enderror" placeholder="Password" name="password"  autocomplete="new-password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                <div class="col-md-8">
                <input id="password-confirm" type="password" minlength="8" class="form-control form-reg" placeholder="Re-write Password" name="password_confirmation"  autocomplete="new-password">
                </div>
            </div>
            <input type="hidden" value="MERCHANT" name="roles"  autofocus placeholder="Merchant Name">

            <div class="row row-add">
                <button class="btn-ambilAntrian">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection