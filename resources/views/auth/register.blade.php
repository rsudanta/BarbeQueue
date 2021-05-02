@extends('templates.master')

@section('header')
@include('templates.header2')
@endsection

@section('isi_page')
<div class="page-wrapper">
    <div class="container box-register">
        <form method="POST" action="{{ route('register') }}">
            <div class="row">
                <p class="txt-register">Register Account</p>
            </div>
            @csrf
            <div class="form-group row" style="margin-top:70px">
                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" style="width:400px" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control form-reg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control form-reg @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control form-reg" placeholder="Re-write Password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row" style="justify-content:flex-end">
                <input type="submit" value="Register" >
            </div>
        </form>
    </div>
</div>
@endsection