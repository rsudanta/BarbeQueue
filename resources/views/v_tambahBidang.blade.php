@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron jumb-bid"></div>
            <div class="container cont-bid">
            <div class="txt-path">
                <a href="dashboard" style="color: #000000">Dashboard ></a>
                <a href="tambahbidang" style="color: #000000">Tambah Bidang</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="POST" action="{{ route('admin_bidang_store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row" style="margin-top:70px">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Nama Bidang') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control form-reg" name="nama_bidang" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Deskripsi Bidang') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control form-reg" name="deskripsi_bidang" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-left">{{ __('Foto Bidang') }}</label>

                        <div class="col-md-8">
                            <div class="fileUpload btn btn-imgBid">
                                <span>Browse</span>
                                <input type="file" class="upload" name="foto_bidang"/>
                            </div>
                        </div>
                    </div>
                    <div class="row row-add">
                        <button class="btn-ambilAntrian">Tambah</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
