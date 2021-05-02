@extends('templates.master')

@section('header')
    @include('templates.header2')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron2">
            <div class="container">
                <p class="txt-merchantA">My Activity</p>
            </div>
        </div>
        <div class="container" style="margin-top: 54px; margin-bottom:54px">
            <div class="txt-path">
                <a href="dashboard" style="color: #000000">Dashboard ></a>
                <a href="aktivitas" style="color: #000000">My Activity</a>
            </div>
            <p class="txt-activity">On-Going</p>
            <div class="row daftar-activity">
          
                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>Almost!</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>On Process</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>Done</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>Almost!</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>On Process</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                        <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                            <div class="txt-status">
                                <p>Done</p>
                            </div>
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Sekarang</p>
                            </div>        
                        </div>
                    </div>
                </div>
                
            </div>

            <p class="txt-activity2">History</p>
            <div class="row daftar-activity">
                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

                <div class="col-20 mb-3">
                    <div class="card " style="width: 13rem">
                        <div class="gambar">
                            <img src="{{asset('assets/images/toko.png')}}" class="card-img-top" alt="toko1" />
                        </div>
                        <div class="row row-titleA">
                            <p class="card-titleA">K- Marttt</p>
                        </div>
                        <div class="card-body">
                            <div class="row row-aBody">
                                <p class="card-textA">Tanggal</p>
                                <p class="card-text1A">23 Januari 2020</p>

                                <p class="card-textA">Antrian Saya</p>
                                <p class="card-text1A">5</p>

                                <p class="card-textA">Estimasi Waktu</p>
                                <p class="card-text1A">Selesai</p>
                            </div>        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection