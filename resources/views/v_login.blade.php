@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
<div class="page-wrapper">
    <div class="container box-register">
        <form>
            <div class="row">
                <p class="txt-register">Login</p>
            </div>
            <div class="row" style="margin-top:61px">
                <div class="col-25">
                    <label>Email</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Password</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Password">
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
@endsection