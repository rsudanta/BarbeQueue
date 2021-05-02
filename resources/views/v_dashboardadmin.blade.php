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
        Hi, Admin,
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
            <a href="" class="btn tombol1">Tambah Bidang</a>
            </div>
          </div>
        </div>
        <div class="col-5 info-panel">
          <div class="row">
            <div class="col-lg">
            <a href="" class="btn tombol1">Tambah Merchant</a>
            </div>
          </div>
        </div>
      </div>
        <!-- End Panel -->

        <div class="row daftarbawah1">
          <div class="col">
            <div class="cardadmin" >
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
                    <tr>
                      <td>0189201</td>
                      <td>K-Mart</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189202</td>
                      <td>K-Marttttttt</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189203</td>
                      <td>K-Club</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189204</td>
                      <td>K-Clubbbbbb</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="cardadmin" >
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
                    <tr>
                      <td>0189201</td>
                      <td>K-Mart</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189202</td>
                      <td>K-Marttttttt</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189203</td>
                      <td>K-Club</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
                    <tr>
                      <td>0189204</td>
                      <td>K-Clubbbbbb</td>
                      <td><button type="button" class="btn btn-del">Delete</button></td>
                    </tr>
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