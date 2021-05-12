@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
      <div class="area">

      
      <div class="sidebar">
        <center>
        <img src="{{asset('assets/images/logo.png')}}"  alt="">
        <h4>{{Auth::user()->name}} </h4>
        </center>
        <a href=""><i class="fas fa-home"></i><span> Status Antrian</span></a>
        <a href="{{ route('merchant_edit', Auth::user()->id) }}"><i class="fas fa-shopping-cart"></i><span> Edit Merchant</span></a>
        <a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
      </div>
     

      <!-- Container -->
      <div class="container cont-mer ">
      <div class="statusan">
      <h class="txt-detailM">Antrian Saat Ini</h>
      <div class="col-md-2 no">
                    <textarea class="form-control form-log" name=tentang rows="1" cols="7" required></textarea>
                </div>
      </div>
      
      

      <div class="infoan">
      <p>Informasi Pengantri</p>
      </div>

      <div class="row daftarbawah4">
        <div class="col">
          <div class="cardantri">
            <div class="card-body">
              <table class="table">
              <tbody>
              <tr>
                  <td>No. Antrian</td>
                  <td>001</td>
                  
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>Salma Alifia Shafira</td>
                  
                </tr>
                <tr>
                  <td>No. HP</td>
                  <td>081310917914</td>
                  
                </tr>
                <tr>
                  <td>Status Antrian</td>
                  <td>On Going</td>
                  
                </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
        <div class="row">
          <div class="col-lg-5">
          <div class="row row-info">
                <button class="btn-ambilAntrian">Done</button>
            </div>
          </div>

          <div class="col-lg-3">
          <div class="row row-info1">
                <button class="btn-ambilAntrian1">Expired</button>
            </div>
          </div>
        </div>

      </div>
      </div>
  </div>
    <!-- End Container -->   
@endsection