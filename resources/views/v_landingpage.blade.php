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
                </div>
                <div class="col-6 hehe">
                <!-- <img src="{{asset('assets/images/hero.png')}}" alt=""> -->
                </div>
            </div>
        </div>
    </div>


    <section class="section-about">
        <div class="container">
            <h1 class="text-center">Tentang Kami</h1>
            <p class="pt-4">BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                online yang
                menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah
                sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                BarbeQueue adalah sebuah aplikasi online yang menyediakan</p>
        </div>
    </section>


    <section class="section-carakerja">
        <div class="container">
            <h1 class="text-center">Cara Kerja</h1>
            <p class="pt-4">BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah
                sebuah aplikasi online yang menyediakan </p>
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

    <section class="section-testimoni">
        <div class="container">
            <h1 class="text-center">Testimonial</h1>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list ">
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4">“ INI BAGIAN TESTIMONIAL BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah
                                            sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                                            online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan.”

                                            - Shalvina Zahwa Aulia</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4">“ INI BAGIAN TESTIMONIAL BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah
                                            sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                                            online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan.”

                                            - Shalvina Zahwa Aulia</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/shalvina.png')}}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('assets/images/Bintang.png')}}" alt="">
                                        <p class="pt-4">“ INI BAGIAN TESTIMONIAL BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan BarbeQueue adalah
                                            sebuah aplikasi online yang menyediakan BarbeQueue adalah sebuah aplikasi
                                            online yang menyediakan BarbeQueue adalah sebuah aplikasi online yang
                                            menyediakan BarbeQueue adalah sebuah aplikasi online yang menyediakan
                                            BarbeQueue adalah sebuah aplikasi online yang menyediakan.”

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
