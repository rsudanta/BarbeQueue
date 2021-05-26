@extends('templates.master')

@section('title','Dashboard Admin')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<!-- Jumbotron -->
<title>Barbequeue - Dashboard Admin</title>
<div class="page-wrapper">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-4">
        Hi, {{Auth::User()->name}}
      </h2>

      <p class="display-5">
        Silahkan mulai mengatur BarbeQueue melalui halaman ini!
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
            <a href="{{route('admin_bidang')}}" class="btn tombol1">Tambah Bidang</a>
          </div>
        </div>
      </div>
      <div class="col-5 info-panel">
        <div class="row">
          <div class="col-lg">
            <a href="{{route('admin_merchant')}}" class="btn tombol1">Tambah Merchant</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Panel -->

    <div class="row daftarbawah1">
      <div class="col">
        <div class="cardadmin">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID Bidang</th>
                  <th scope="col">Nama Bidang</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bidang as $bidang)
                <tr>
                  <td>{{$bidang->id}}</td>
                  <td>{{$bidang->nama_bidang}}</td>
                  <td>
                    <form action="{{route('admin_delete_bidang',$bidang->id)}}" method="post">
                      @csrf
                      {{method_field('delete')}}
                      <button type="submit" class="btn btn-del">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cardadmin">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID Merchant</th>
                  <th scope="col">Nama Merchant</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>
                    <form action="{{route('admin_delete_merchant',$user->id)}}" method="post">
                      @csrf
                      {{method_field('delete')}}
                      <button type="submit" class="btn btn-del">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>


  <div class="page-wrapper">
    <!-- End Container -->
    @endsection