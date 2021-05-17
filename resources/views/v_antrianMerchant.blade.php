@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron2 jumbotron-fluid">
            <div class="container">
                <p class="txt-merchantA">K-Marttt</p>
            </div>
        </div>
        <div class="container cont-antrian">
            <div class="txt-path">
                <a href="{{route('user_dashboard')}}" style="color: #000000">Dashboard ></a>
                <a href="{{route('user_merchant')}}" style="color: #000000">Merchant ></a>
                <a href="{{route('user_merchant_detail')}}" style="color: #000000">K-Marttt ></a>
                <a href="{{route('user_ambilAntrian')}}" style="color: #000000">Antrian Info</a>
            </div>
            <h class="txt-antrianinfo">Antrian Info</h>
            <div class="row" style="margin-top:5%; margin-bottom:3%">
                <div class="col-sm-3" style="font-weight: 700">No. Antrian saat ini</div>
                <div class="col-sm-2">
                    <p>5</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3" style="font-weight: 700">No. Antrian Anda</div>
                <div class="col-sm-2">
                    <p>7</p>
                </div>
            </div>
            <div class="row row-antrian">
                <button oncLick="#" class="btn-ambilAntrian">Ambil Nomor Antrian</button>
            </div>
        </div>
    </div>
@endsection