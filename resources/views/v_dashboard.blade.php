@extends('templates.master')

@section('isi_page')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h2 class="display-4">
          Hi, Salma Alifia,
        </h2>
        
        <p class="display-5">
        Yuk, Mulai aktivitasmu hari ini dengan mengambil nomor antrian terlebih dahulu!
        </p>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container space">
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
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row daftar">
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              <div class="card-body text-center">
                <p class="card-text">Kecantikan</p>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- End Container -->   
<!-- @endsection -->