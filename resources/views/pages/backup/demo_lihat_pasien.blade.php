<?php $title = "Data Pasien"; ?>

@extends('layouts/index')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pasien</h3>
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
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 pb-2">
                                    <button class="btn btn-success" onclick="location.href='/update_perawatan'">
                                        Update Data
                                    </button>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>Chelsea</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>chelsea@gmail.com</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>No. Telp</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>085123381322</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>Margorejo</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Riwayat Penyakit</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>Sariawan</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Riwayat Perawtan</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>Filling gigi</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kunjungan terakhir</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <h6>01-21-2023</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>Odontogram</h3>
                                <div class="row  pt-2">
                                    <div class="col-6">
                                        <img id="kondisi_gigi1" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#myModal" />
                                        <img id="kondisi_gigi2" src="{{asset('images/caries.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi3" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi4" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi5" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi6" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi7" src="{{asset('images/caries1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi8" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                    </div>
                                    <div class="col-6">
                                        <img id="kondisi_gigi9" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi10" src="{{asset('images/caries1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi11" src="{{asset('images/normal1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi12" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi13" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi14" src="{{asset('images/sisa_akar.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
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
                                        <img id="kondisi_gigi30" src="{{asset('images/tambalan.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi31" src="{{asset('images/caries.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                        <img id="kondisi_gigi32" src="{{asset('images/normal.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
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
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@stop