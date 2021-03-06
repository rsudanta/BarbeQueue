@extends('templates.master')

@section('title','Pilih Merchant')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<!-- Jumbotron -->

<div class="page-wrapper">
  <div class="jumbotron2 jumbotron-fluid">
    <div class="search">
      <form>
        <input type="text" name="search" class="cari">
        <a><img src="{{asset('assets/images/search.png')}}" alt=""></a>
      </form>

    </div>

  </div>
  <!-- End Jumbotron -->

  <!-- Container -->
  <div class="container">

    <section class="section-hal">
      <div class="container">
        <h1 class="text-hal"> <a href="{{route('user_dashboard')}}">Dashboard</a> <a href=""> > Merchant</a></h1>
      </div>
    </section>

    <div class="row daftar">
      @forelse($items as $item)
      <div class="col-md-3 mb-3">
        <div class="card " style="width: 13rem">
          <div class="gambar">
            <a href="{{route('user_merchant_detail',$item->id)}}">
              <img src="/storage/foto/{{$item->foto_merchant}}" class="card-img-top" alt="toko1" />
            </a>
          </div>
          <div class="card-body ">
            <p class="card-title">{{$item->user->name}}</p>
            <p class="card-text">{{$item->tentang}}</p>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <h5 class="text-center">Belum terdapat data merchant pada Aplikasi</h5>
      </div>
      @endforelse
    </div>
  </div>
</div>
<!-- End Container -->
@endsection