@extends('templates.master')

@section('header')
@include('templates.header2')
@endsection

@section('isi_page')
<div class="page-wrapper">
    <div class="container box-register">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <p class="txt-register">Login</p>
            </div>
            <div class="row" style="margin-top:61px">
                <div class="col-25">
                    <label>Email</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Email" id="email" name="email">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Password</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Password" id="password" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Login">
            </div>

            <div class="row">
                <div class="col-70">
                    <p>Belum punya akun ? <a href="" class="text fw-bold textlog">Register sekarang!</a> </p>
                </div>

            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection