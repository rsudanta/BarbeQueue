@extends('templates.master')

@section('title','Dashboard')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<!-- Jumbotron -->
<title>Barbequeue - Dashboard</title>
<div class="page-wrapper">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">
        Hi, {{Auth::user()->name}},
      </h2>

      <p class="display-5">
        Yuk, Mulai aktivitasmu hari ini dengan mengambil nomor antrian terlebih dahulu!
      </p>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Container -->
  <div class="container">
    <!-- Panel -->
    <div class="row justify-content-center">
      <div class="col-5 info-panel">
        <div class="row ">
          <div class="col-lg">
            <a href="{{route('user_activity')}}" class="btn tombol1">My Activity</a>
          </div>
        </div>
      </div>
      <div class="col-5 info-panel">
        <div class="row">
          <div class="col-lg">
            <a href="{{route('user_profile')}}" class="btn tombol1">My Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Panel -->


    <div class="row">
      @forelse($bidang as $bidang)

      <div class="col-md-3 mb-3 ">
        <div class="card " style="max-width: 13rem">
          <div class="gambar">
            <a href="{{route('user_merchant',$bidang->id)}}">
              <img src="/storage/foto/{{$bidang->foto_bidang}}" class="card-img-top" alt="toko1" />
            </a>
          </div>
          <div class="card-body">
            <p class="card-title">{{$bidang->nama_bidang}}</p>
            <p class="card-text">{{$bidang->deskripsi_bidang}}</p>
            <p class="card-text1">{{$bidang->count}} Stores Available</p>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <h5 class="pt-5 pb-5 text-center">Belum terdapat data bidang pada Aplikasi</h5>
      </div>
      @endforelse
    </div>
  </div>

  <div class="page-wrapper">
    <!-- End Container -->
    @endsection