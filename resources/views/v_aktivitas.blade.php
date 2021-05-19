@extends('templates.master')

@section('header')
@include('templates.header2')
@endsection

@section('isi_page')
<title>Barbequeue - Aktivitas</title>
<div class="page-wrapper">
    <div class="jumbotron2">
        <div class="container">
            <p class="txt-merchantA">My Activity</p>
        </div>
    </div>
    <div class="container" style="margin-top: 54px; margin-bottom:54px">
        <div class="txt-path">
            <a href="{{route('user_dashboard')}}" style="color: #000000">Dashboard ></a>
            <a href="{{route('user_activity')}}" style="color: #000000">My Activity</a>
        </div>
        <p class="txt-activity">On-Going</p>
        <div class="row daftar-activity">
            @foreach($ongoing as $ongoing)
            <div class="col-20 mb-3">
                <div class="card " style="width: 13rem">
                    <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        <div class="txt-status">
                            <p>{{$ongoing->status}}</p>
                        </div>
                    </div>
                    <div class="row row-titleA">
                        <p class="card-titleA">{{$ongoing->detail_merchant->user->name}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row row-aBody">
                            <p class="card-textA">Tanggal</p>
                            <p class="card-text1A">{{$ongoing->created_at}}</p>

                            <p class="card-textA">Antrian Saya</p>
                            <p class="card-text1A">{{$ongoing->no_antrian}}</p>

                            <p class="card-textA">Estimasi Waktu</p>
                            <p class="card-text1A">Sekarang</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <p class="txt-activity2">History</p>
        <div class="row daftar-activity">
            @foreach($done as $done)
            <div class="col-20 mb-3">
                <div class="card " style="width: 13rem">
                    <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                    </div>
                    <div class="row row-titleA">
                        <p class="card-titleA">{{$done->detail_merchant->user->name}}</p>
                    </div>
                    <div class="card-body">
                        <div class="row row-aBody">
                            <p class="card-textA">Tanggal</p>
                            <p class="card-text1A">{{$done->created_at}}</p>

                            <p class="card-textA">Antrian Saya</p>
                            <p class="card-text1A">{{$done->no_antrian}}</p>

                            <p class="card-textA">Status</p>
                            <p class="card-text1A">{{$done->status}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection