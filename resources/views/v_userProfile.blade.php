@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron2">
            <div class="container">
                <p class="txt-merchantA">My Profile</p>
            </div>
        </div>
        <div class="container cont-userProfile">
            <img src="{{asset('assets/images/shalvina.png')}}" class="img-userProfile" alt ="ProfilePic" >
            <form method="POST" action="#">
                <div class="form-group row" style="margin-top:50px">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Nama') }}</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control form-log" name="name" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left">{{ __('Email') }}</label>

                        <div class="col-md-8">
                            <input type="email" class="form-control form-log" name="email" required autofocus>
                        </div>
                    </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Nomor Telepon') }}</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control form-log" name="telp_user" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">{{ __('Foto Profil') }}</label>

                    <div class="col-md-8">
                        <div class="fileUpload btn btn-imgBid">
                            <span>Browse</span>
                            <input type="file" class="upload" name="img_user"/>
                        </div>
                    </div>
                </div>
                <div class="row row-add">
                    <button oncLick="#" class="btn-ambilAntrian">Update</button>
                </div>
                <div class="form-group row" style="margin-top:85px">
                    <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password Lama') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control form-log @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Password Baru') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control form-log" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="row row-add" style="margin-bottom:65px">
                    <button oncLick="#" class="btn-ambilAntrian">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection