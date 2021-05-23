@extends('templates.master')

@section('title','Status Antrian')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')

<title>Barbequeue - Dashboard Merchant</title>
<div class="page-wrapper">
  <div class="area">


    <div class="sidebar">
      <center>
        <img src="{{asset('assets/images/logo.png')}}" alt="">
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
          <p class="form-log text-center" >{{$antrian->no_antrian_sekarang}}</p>
        </div>
      </div>



      <div class="infoan">
        <p>Informasi Pengantri</p>
      </div>
      @if($ongoing != null)
      <div class="row daftarbawah4">
        <div class="col">
          <div class="cardantri">
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>No. Antrian</td>
                    <td>{{$ongoing->no_antrian}}</td>

                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>{{$ongoing->user->name}}</td>

                  </tr>
                  <tr>
                    <td>No. HP</td>
                    @if($ongoing->user->no_hp_user != null)
                    <td>{{$ongoing->user->no_hp_user}}</td>
                    @elseif($ongoing->user->no_hp_user == null)
                    <td>-</td>
                    @endif
                  </tr>
                  <tr>
                    <td>Status Antrian</td>
                    <td>{{$ongoing->status}}</td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <div class="row mb-3 row-info">
            <form action="{{ route('done', $ongoing->id) }}" method="POST">
              @csrf
              <button class="btn-ambilAntrian">Done</button>
            </form>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="row mb-3 row-info1">
            <form action="{{ route('expire', $ongoing->id) }}" method="POST">
              @csrf
              <button class="btn-ambilAntrian1">Expired</button>
            </form>
          </div>
        </div>
      </div>
      @endif

      @foreach ($waitings as $waiting)
      <div class="row daftarbawah4">
        <div class="col">
          <div class="cardantri">
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>No. Antrian</td>
                    <td>{{$waiting->no_antrian}}</td>

                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>{{$waiting->user->name}}</td>

                  </tr>
                  <tr>
                    <td>No. HP</td>
                    @if($waiting->user->no_hp_user != null)
                    <td>{{$waiting->user->no_hp_user}}</td>
                    @elseif($waiting->user->no_hp_user == null)
                    <td>-</td>
                    @endif
                  </tr>
                  <tr>
                    <td>Status Antrian</td>
                    <td>{{$waiting->status}}</td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
<!-- End Container -->
@endsection