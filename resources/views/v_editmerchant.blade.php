@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
      <div class="sidebar">
        <center>
        <img src="{{asset('assets/images/logo.png')}}"  alt="">
        <h4>Merchant <br> Kecantikan </h4>
        </center>
        <a href=""><i class="fas fa-home"></i><span> Status Antrian</span></a>
        <a href=""><i class="fas fa-shopping-cart"></i><span> Edit Merchant</span></a>
        <a href=""><i class="fas fa-sign-out-alt"></i><span> Logout</span></a>
      </div>
     

      <!-- Container -->
      <div class="container">


     
          
      </div>
  </div>
    <!-- End Container -->   
@endsection