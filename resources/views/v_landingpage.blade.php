@extends('templates.master0')

@section('header')
    @include('templates.header0')
@endsection

@section('isi_page')
<div class="page-wrapper">
<div class="container-fluid">
        <div class="container ">
            <div class="row">
                <div class="col-6 hero">
                    
                    <h1 class="title">BarbeQueue
                    </h1>
                    <p>Aplikasi Antrian Online</p>
                    <a href="{{route('login')}}" class="mt-4 btn btn-barbequeue">
                        <p>Login</p>
                    </a>
                    <!--
                    <a href="{{ url('logout') }}" class="mt-4 btn btn-barbequeue">
                        <p>Logout</p>
                    </a>-->
                </div>
                <div class="col-6 hehe">
                <!-- <img src="{{asset('assets/images/hero.png')}}" alt=""> -->
                </div>
            </div>
        </div>
    </div>


    <section class="section-about" id="tentang">
        <div class="container tentangb">
            <h1 class="text-center tengahh">Tentang Kami</h1>
            <p class="pt-4">BarbeQueue adalah sebuah aplikasi antrian online yang akan sangat membantu anda untuk melakukan antrian dengan cepat, efisien, dan efektif tanpa harus datang ke lokasi merchant. BarbeQueue hadir untuk menemani anda dalam melakukan aktivitas sehari-hari tanpa harus menghabiskan waktu untuk mengantri di lokasi. Anda dapat mengambil nomor antrian di rumah dan datang ke lokasi disaat nomor antrian yang anda mliki sudah dekat.</p>
        </div>
    </section>


    <section class="section-carakerja" id="caraKerja">
        <div class="container">
            <h1 class="text-center">Cara Kerja</h1>
            <p class="pt-4 text-center">BarbeQueue dapat digunakan dengan mudah dengan hanya mengikuti beberapa langkah berikut ini: </p>
            <div class="row pt-5">
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('assets/images/1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('assets/images/2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('assets/images/3.png')}}" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{asset('assets/images/4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimoni" id="testimoni">
        <div class="container">
            <h1 class="text-center">Testimonial</h1>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list ">
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="" class="shal">
                                    </div>
                                    <div class="col-7">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4 text-justify">“Saya sering sekali menggunakan aplikasi BarbeQueue ini untuk mengambil nomor antrian di salah satu merchant kecantikan dekat rumah saya. Saya senang sekali karena dengan adanya BarbeQueue, saya benar-benar bisa mengefektifkan waktu yang saya miliki. Sudah dipastikan semua orang sangat membutuhkan aplikasi BarbeQueue ini untuk mengambil nomor antrian dalam aktivitas sehari-hari.”
                                        <br><br>
                                            - Shalvina Zahwa Aulia</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="" class="shal">
                                    </div>
                                    <div class="col-7">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4 text-justify">“Saya sering sekali menggunakan aplikasi BarbeQueue ini untuk mengambil nomor antrian di salah satu merchant kecantikan dekat rumah saya. Saya senang sekali karena dengan adanya BarbeQueue, saya benar-benar bisa mengefektifkan waktu yang saya miliki. Sudah dipastikan semua orang sangat membutuhkan aplikasi BarbeQueue ini untuk mengambil nomor antrian dalam aktivitas sehari-hari.”
                                        <br><br>
                                            - Shalvina Zahwa Aulia</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="" class="shal">
                                    </div>
                                    <div class="col-7">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4 text-justify">“Saya sering sekali menggunakan aplikasi BarbeQueue ini untuk mengambil nomor antrian di salah satu merchant kecantikan dekat rumah saya. Saya senang sekali karena dengan adanya BarbeQueue, saya benar-benar bisa mengefektifkan waktu yang saya miliki. Sudah dipastikan semua orang sangat membutuhkan aplikasi BarbeQueue ini untuk mengambil nomor antrian dalam aktivitas sehari-hari.”
                                        <br><br>
                                            - Shalvina Zahwa Aulia</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
