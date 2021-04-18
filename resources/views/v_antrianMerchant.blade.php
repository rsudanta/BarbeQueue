@extends('templates.master')

@section('header')
    @include('templates.header3')
@endsection

@section('isi_page')
    <div class="page-wrapper">
        <div class="jumbotron2 jumbotron-fluid">
            <div class="container">
                <p class="txt-merchantA">K-Marttt</p>
            </div>
        </div>
        <div class="container cont-antrian">
            <div class="row" style="margin-bottom:3%">
                <div class="col-sm-2">Tanggal</div>
                <div class="col-sm-3">
                    <input class="date form-control"  type="text" id="datepicker" name="date">
                </div>
                <script type="text/javascript">
                    $('#datepicker').datepicker({
                        autoclose: true,
                        format: 'yyyy-mm-dd'
                    });
                </script>
            </div>
            <div class="row">
                <div class="col-sm-2" style="display: inline-block">No. Antrian</div>
                <div class="col-sm-10">
                <button onclick="" class="btn-noAntrian">1</button>
                <button onclick="" class="btn-noAntrian">2</button>
                <button onclick="" class="btn-noAntrian">3</button>
                <button onclick="" class="btn-noAntrian">4</button>
                <button onclick="" class="btn-noAntrian">5</button>
                <button onclick="" class="btn-noAntrian">6</button>
                <button onclick="" class="btn-noAntrian">7</button>
                <button onclick="" class="btn-noAntrian">8</button>
                <button onclick="" class="btn-noAntrian">9</button>
                <button onclick="" class="btn-noAntrian">10</button>
                <button onclick="" class="btn-noAntrian">11</button>
                <button onclick="" class="btn-noAntrian">12</button>

                <!--ini nanti kayanya bisa pake looping foreach kalo udah ada database -->
                <button onclick="" class="btn-noAntrian">13</button>
                <button onclick="" class="btn-noAntrian">14</button>
                <button onclick="" class="btn-noAntrian">15</button>
                <button onclick="" class="btn-noAntrian">16</button>
                <button onclick="" class="btn-noAntrian">17</button>
                <button onclick="" class="btn-noAntrian">18</button>
                <button onclick="" class="btn-noAntrian">19</button>
                <button onclick="" class="btn-noAntrian">20</button>
                <button onclick="" class="btn-noAntrian">21</button>
                <button onclick="" class="btn-noAntrian">22</button>
                <button onclick="" class="btn-noAntrian">23</button>
                <button onclick="" class="btn-noAntrian">24</button>
                </div>
            </div>
            <div class="row row-antrian">
                <button oncLick="#" class="btn-ambilAntrian">Ambil Nomor Antrian</button>
            </div>
        </div>
    </div>
@endsection