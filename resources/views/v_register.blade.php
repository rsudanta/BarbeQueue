@extends('templates.master')

@section('isi_page')
<div class="container box-register">
    <form>
        <div class="row">
            <p class="txt-register">Register Account</p>
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
            <input type="submit" value="Register">
        </div>
    </form>
</div>    
@endsection