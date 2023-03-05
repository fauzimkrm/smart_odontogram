<?php $title = "Data Pasien"; ?>

@extends('layouts/index')

@section('content')

<!-- CSS -->
<style>
    #my_camera {
        width: 640px;
        height: 480px;
    }
</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pemeriksaan Odontogram Pasien</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Layout Vertical Navbar
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-auto" id="my_camera">
                            <img class="mx-auto" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" style="opacity: 0.5; weight: 290px; height:490px;" />
                        </div>
                        <div class="row pt-4">
                            <div class="mx-auto">
                                <input class="btn btn-primary" type=button value="Start Cam" onClick="configure()">
                                <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12">
                <div class="card">
                    <form id="classify">
                        @csrf
                        <div class="card-body">
                            <div class="mx-auto" id="results">
                                <img src="{{asset('images/placeholder.png')}}" alt="image-placeholder" style="opacity: 0.5; weight: 200px; height:200px;" />
                            </div>
                            <input type="hidden" name="image" class="image-tag">
                            <input type="hidden" name="no_rekam_medik" value="{{$pasien->no_rekam_medik}}">
                            <div class="pt-2"><button class="btn btn-success">Prediksi</button></div>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <span style="font-style: italic;">jalankan kamera dari gigi 18 - 48</span>
                        <h2>Hasil Klasifikasi</h2>
                        <div>
                            <!-- <span>Jenis Gigi : </span>
                            <h3 id="jenis_gigi"></h3> -->
                            <h4>Kondisi Gigi : </h4>
                            <h3 id="kondisi_gigi"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Kondisi Gigi 18: </h4>
                        <h5 id="kg1"></h5>
                        <h4>Kondisi Gigi 17: </h4>
                        <h5 id="kg2"></h5>
                        <h4>Kondisi Gigi 16: </h4>
                        <h5 id="kg3"></h5>
                        <h4>Kondisi Gigi 15: </h4>
                        <h5 id="kg4"></h5>
                        <h4>Kondisi Gigi 14: </h4>
                        <h5 id="kg5"></h5>
                        <h4>Kondisi Gigi 13: </h4>
                        <h5 id="kg6"></h5>
                        <h4>Kondisi Gigi 12: </h4>
                        <h5 id="kg7"></h5>
                        <h4>Kondisi Gigi 11: </h4>
                        <h5 id="kg8"></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Kondisi Gigi 21: </h4>
                        <h5 id="kg9"></h5>
                        <h4>Kondisi Gigi 22: </h4>
                        <h5 id="kg10"></h5>
                        <h4>Kondisi Gigi 23: </h4>
                        <h5 id="kg11"></h5>
                        <h4>Kondisi Gigi 24: </h4>
                        <h5 id="kg12"></h5>
                        <h4>Kondisi Gigi 25: </h4>
                        <h5 id="kg13"></h5>
                        <h4>Kondisi Gigi 26: </h4>
                        <h5 id="kg14"></h5>
                        <h4>Kondisi Gigi 27: </h4>
                        <h5 id="kg15"></h5>
                        <h4>Kondisi Gigi 28: </h4>
                        <h5 id="kg16"></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Kondisi Gigi 38: </h4>
                        <h5 id="kg17"></h5>
                        <h4>Kondisi Gigi 37: </h4>
                        <h5 id="kg18"></h5>
                        <h4>Kondisi Gigi 36: </h4>
                        <h5 id="kg19"></h5>
                        <h4>Kondisi Gigi 35: </h4>
                        <h5 id="kg20"></h5>
                        <h4>Kondisi Gigi 34: </h4>
                        <h5 id="kg21"></h5>
                        <h4>Kondisi Gigi 33: </h4>
                        <h5 id="kg22"></h5>
                        <h4>Kondisi Gigi 32: </h4>
                        <h5 id="kg23"></h5>
                        <h4>Kondisi Gigi 31: </h4>
                        <h5 id="kg24"></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Kondisi Gigi 41: </h4>
                        <h5 id="kg25"></h5>
                        <h4>Kondisi Gigi 42: </h4>
                        <h5 id="kg26"></h5>
                        <h4>Kondisi Gigi 43: </h4>
                        <h5 id="kg27"></h5>
                        <h4>Kondisi Gigi 44: </h4>
                        <h5 id="kg28"></h5>
                        <h4>Kondisi Gigi 45: </h4>
                        <h5 id="kg29"></h5>
                        <h4>Kondisi Gigi 46: </h4>
                        <h5 id="kg30"></h5>
                        <h4>Kondisi Gigi 47: </h4>
                        <h5 id="kg31"></h5>
                        <h4>Kondisi Gigi 48: </h4>
                        <h5 id="kg32"></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Odontogram</h3>
                        <div class="row  pt-2">
                            <div class="col-6">
                                <img id="kondisi_gigi1" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#myModal" />
                                <img id="kondisi_gigi2" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#myModal" />
                                <img id="kondisi_gigi3" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi4" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi5" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi6" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi7" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi8" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                            </div>
                            <div class="col-6">
                                <img id="kondisi_gigi9" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi10" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi11" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi12" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi13" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi14" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi15" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi16" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-6">
                                <img id="kondisi_gigi17" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi18" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi19" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi20" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi21" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi22" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi23" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi24" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                            </div>
                            <div class="col-6">
                                <img id="kondisi_gigi25" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi26" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi27" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi28" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi29" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi30" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi31" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                <img id="kondisi_gigi32" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="section">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{route('simpan-odontogram')}}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Pasien</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" class="form-control" rows="3" placeholder="Nama Lengkap" value="{{ $pasien->nama }}" disabled />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Dokter Penangan</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" name="dokter" class="form-control" rows="3" placeholder="Nama Dokter" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tanggal Kunjungan</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="date" name="tanggal_kunjungan" class="form-control" rows="3" />
                                    </div>
                                    <input type="hidden" class="form-control" name="pasien_id" value="{{ $pasien->id }}" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi1" id="kondisi_gigi_1" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi2" id="kondisi_gigi_2" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi3" id="kondisi_gigi_3" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi4" id="kondisi_gigi_4" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi5" id="kondisi_gigi_5" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi6" id="kondisi_gigi_6" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi7" id="kondisi_gigi_7" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi8" id="kondisi_gigi_8" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi9" id="kondisi_gigi_9" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi10" id="kondisi_gigi_10" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi11" id="kondisi_gigi_11" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi12" id="kondisi_gigi_12" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi13" id="kondisi_gigi_13" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi14" id="kondisi_gigi_14" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi15" id="kondisi_gigi_15" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi16" id="kondisi_gigi_16" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi17" id="kondisi_gigi_17" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi18" id="kondisi_gigi_18" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi19" id="kondisi_gigi_19" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi20" id="kondisi_gigi_20" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi21" id="kondisi_gigi_21" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi22" id="kondisi_gigi_22" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi23" id="kondisi_gigi_23" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi24" id="kondisi_gigi_24" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi25" id="kondisi_gigi_25" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi26" id="kondisi_gigi_26" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi27" id="kondisi_gigi_27" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi28" id="kondisi_gigi_28" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi29" id="kondisi_gigi_29" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi30" id="kondisi_gigi_30" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi31" id="kondisi_gigi_31" />
                                    <input type="hidden" class="form-control" name="kondisi_gigi32" id="kondisi_gigi_32" />
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Simpan dan Cetak Odontogram
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Data Gigi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10 mx-auto">
                        <img src="{{asset('images/demo1.JPG')}}" alt="image-placeholder" style="weight: 300px; height:200px;" />
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Kondisi Gigi</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <!-- <option selected="">Pilih . . .</option> -->
                                <option value="1">Karies</option>
                                <option value="2">Normal</option>
                                <option value="3">Sisa Akar</option>
                                <option value="4">Tumpatan</option>
                                <option value="5">Impaksi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@endsection
@push('footer_script')
<script language="JavaScript">
    // Configure a few settings and attach camera
    function configure() {
        Webcam.set({
            width: 640,
            height: 480,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');
    }
    // A button for taking snaps


    function take_snapshot() {
        // take snapshot and get image data
        Webcam.snap(function(data_uri) {
            // display results in page
            document.getElementById('results').innerHTML =
                '<img class="img-thumbnail" id="imageprev" src="' + data_uri + '"/>';
            $(".image-tag").val(data_uri)
        });

    }

    var form = $("#classify");
    var count = 1;

    form.submit(function(e) {
        e.preventDefault();
        var form_data = $("#classify")[0];
        var data = new FormData(form_data);
        $.ajax({
            type: "POST",
            url: "{{route('webcam.capture')}}",
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
        }).done(function(response) {
            let result = JSON.parse(response)
            $("#jenis_gigi").html(result.jenis_gigi);
            $("#kondisi_gigi").html(result.kondisi_gigi);
            $("#jenis_gigi_" + count).html(result.jenis_gigi);
            $("#kg" + count).html(result.kondisi_gigi);
            $("#kondisi_gigi_" + count).val(result.kondisi_gigi);
            count = count + 1;
        });
    });

    $(document).ready(function() {
        // $("#modal1").click(function() {
        //     $('.modal').modal('show');
        // });

        $("#kedatangan_sendiri").click(function() {
            $("#kedatangan").attr("disabled", true);
        });

        $("#kedatangan_rujukan").click(function() {
            $("#kedatangan").attr("disabled", false);
        });

        $("#riwayat_belum").click(function() {
            $("#riwayat").attr("disabled", true);
        });

        $("#riwayat_pernah").click(function() {
            $("#riwayat").attr("disabled", false);
        });

    });
</script>
@endpush