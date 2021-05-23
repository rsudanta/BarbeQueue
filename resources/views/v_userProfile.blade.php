@extends('templates.master')

@section('title','User Profile')

@section('header')
@include('templates.header1')
@endsection

@section('isi_page')
<title>Barbequeue - Profile</title>
<div class="page-wrapper">
    <div class="jumbotron2">
        <div class="container">
            <p class="txt-merchantA">My Profile</p>
        </div>
    </div>

    <div class="container cont-userProfile">
        <div class="txt-path">
            <a href="{{route('user_dashboard')}}" style="color: #000000">Dashboard </a>
        </div>
        <img src="/storage/foto/{{Auth::user()->foto_user}}" class="img-userProfile" alt="ProfilePic">
        <form method="POST" action="{{route('user_update', Auth::user()->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row" style="margin-top:50px">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Nama') }}</label>

                <div class="col-md-8">
                    <input type="text" class="form-control form-log" name="name" required autofocus value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Email') }}</label>

                <div class="col-md-8">
                    <input type="email" class="form-control form-log" name="email" value="{{Auth::user()->email}}" readonly required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Nomor Telepon') }}</label>

                <div class="col-md-8">
                    <input type="text" class="form-control form-log" name="no_hp" value="{{Auth::user()->no_hp}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-left">{{ __('Foto Profil') }}</label>

                <div class="col-md-8">
                    <div class="fileUpload btn btn-imgBid">
                        <span>Browse</span>
                        <input type="file" class="upload" name="foto_user" />
                    </div>
                </div>
            </div>
            <div class="row row-add">
                <button class="btn-ambilAntrian">Update</button>
            </div>
        </form>

        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
            @csrf
            <div class="form-group row" style="margin-top:85px">
                <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password Lama') }}</label>
                @if ($errors->has('current-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('current-password') }}</strong>
                </span>
                @endif
                @if ($errors->has('new-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('new-password') }}</strong>
                </span>
                @endif
                @if ($errors->has('new-password-confirm'))
                <span class="help-block">
                    <strong>{{ $errors->first('new-password-confirm') }}</strong>
                </span>
                @endif
                <div class="col-md-8">
                    <input id="password" type="password" class="form-control form-log @error('password') is-invalid @enderror" name="current-password" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Password Baru') }}</label>

                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control form-log" name="new-password" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Konfirmasi Password Baru') }}</label>

                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control form-log" name="new-password-confirm" required autocomplete="new-password">
                </div>
            </div>
            <div class="row row-add" style="margin-bottom:65px">
                <button class="btn-ambilAntrian">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection