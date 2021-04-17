@extends('templates.master')

@section('header')
    @include('templates.header3')
@endsection

@section('isi_page')
    <!-- Jumbotron -->
    <div class="page-wrapper">
      <div class="jumbotron2 jumbotron-fluid">
        <div class="container">
          <tr>
            <td>
              <input type="text" class="search">
            </td>
            <td>
              <a href="#"><i class="material-icons">search</i></a>
            </td>
          </tr>
        </div>
      </div>
      <!-- End Jumbotron -->

      <!-- Container -->
      <div class="container">
      <div class="row daftar">
          <div class="col-md-3 mb-3">
            <div class="card " style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              <div class="card-body ">
                <p class="card-title">K-Marttt</p>
                <p class="card-text">Ayo Ih disini aja</p>
                <p class="card-text1">Jakarta</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              <div class="card-body ">
              <p class="card-title">K-Mart</p>
                <p class="card-text">Nggak, disini ajaaaaaa</p>
                <p class="card-text1">Madiun</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              <div class="card-body ">
              <p class="card-title">K-Martttttttt</p>
                <p class="card-text">Awas aja lo ga kesini</p>
                <p class="card-text1">Surabaya</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              <div class="card-body ">
              <p class="card-title">K-Lord</p>
                <p class="card-text">Hadeuuuu capek</p>
                <p class="card-text1">Sulawesi</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row daftarbawah">
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
              <div class="card-body ">
              <p class="card-title">Hei, Apa Kabar?</p>
                <p class="card-text">Ayooo kesini</p>
                <p class="card-text1">Papua</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko2" />
              <div class="card-body ">
              <p class="card-title">Toko Ini Aja</p>
                <p class="card-text">Aku dekat sama kamu</p>
                <p class="card-text1">Bandung</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko3" />
              <div class="card-body ">
              <p class="card-title">Ini Toko</p>
                <p class="card-text">Aduh aku pusing bgt</p>
                <p class="card-text1">Jatinangor</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 13rem">
              <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko4" />
              <div class="card-body ">
              <p class="card-title">Loh Kok</p>
                <p class="card-text">Eh ini gimana eh</p>
                <p class="card-text1">Subang</p>
              </div>
            </div>
          </div>
        </div>
          
      </div>
  </div>
    <!-- End Container -->   
@endsection