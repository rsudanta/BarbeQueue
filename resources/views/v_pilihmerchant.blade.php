@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <!-- Jumbotron -->
    <div class="page-wrapper">
      <div class="jumbotron2 jumbotron-fluid">
        <h1>
          Search Box
        </h1>
        <div class="box">
          <i class="fa fa-seardh" aria-hidden="true"> </i>
          <input type="text" name="">
        </div>
      </div>
      <!-- End Jumbotron -->

      <!-- Container -->
      <div class="container">
      <div class="row daftar">
          <div class="col-md-3 mb-3">
            <div class="card " style="width: 13rem">
            <div class="gambar">
            <a href="">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              </a>
              </div>
              <div class="card-body ">
                <p class="card-title">K-Marttt</p>
                <p class="card-text">Ayo Ih disini aja</p>
                
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
              <p class="card-title">K-Mart</p>
                <p class="card-text">Nggak, disini ajaaaaaa</p>
                
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
              <p class="card-title">K-Martttttttt</p>
                <p class="card-text">Awas aja lo ga kesini</p>
                
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
              <p class="card-title">K-Lord</p>
                <p class="card-text">Hadeuuuu capek</p>
                
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
              <p class="card-title">Hei, Apa Kabar?</p>
                <p class="card-text">Ayooo kesini</p>
                
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
              <p class="card-title">Toko Ini Aja</p>
                <p class="card-text">Aku dekat sama kamu</p>
                
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
              <p class="card-title">Ini Toko</p>
                <p class="card-text">Aduh aku pusing bgt</p>
                
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
              <p class="card-title">Loh Kok</p>
                <p class="card-text">Eh ini gimana eh</p>
                
              </div>
            </div>
          </div>
        </div>
          
      </div>
  </div>
    <!-- End Container -->   
@endsection