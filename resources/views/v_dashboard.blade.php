@extends('templates.master')

@section('header')
  @include('templates.header1')
@endsection

@section('isi_page')
    <!-- Jumbotron -->

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
            <a href="" class="btn tombol">My Activity</a>
            </div>
          </div>
        </div>
        <div class="col-5 info-panel">
          <div class="row">
            <div class="col-lg">
            <a href="" class="btn tombol1">My Profile</a>
            </div>
          </div>
        </div>
      </div>
        <!-- End Panel -->

        
        <div class="row daftar">
          
          <div class="col-md-3 mb-3">
            <div class="card " style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              </a>
            </div>
              <div class="card-body ">
                <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row daftarbawah">
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              </a>
              </div>
              <div class="card-body ">
              <p class="card-title">Kecantikan</p>
                <p class="card-text">Rawat indahnya wajahmu!</p>
                <p class="card-text1">4 Stores Available</p>
              </div>
            </div>
          </div>
        </div>

    </div>
    <div class="page-wrapper">

    <!-- End Container -->   
@endsection