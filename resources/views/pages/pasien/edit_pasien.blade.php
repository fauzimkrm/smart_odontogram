<?php $title = "Edit Pasien"; ?>

@extends('layouts/index')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Pasien</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('update-pasien', [$pasien->id])}}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>No. Rekam Medik</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" id="no_rekam_medik" class="form-control" name="no_rekam_medik" placeholder="No. Rekam Medik" value="{{$pasien->no_rekam_medik}}" required disabled/>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{$pasien->nama}}" required/>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" value="{{$pasien->tanggal_lahir}}" require/>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value="0" {{ $pasien->jenis_kelamin == "0" ? "checked" : ""}}/>
                                            <label class="form-check-label" for="pria">
                                                Laki - Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="1" {{ $pasien->jenis_kelamin == "1" ? "checked" : ""}}/>
                                            <label class="form-check-label" for="wanita">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="tex" class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat" required value="{{$pasien->alamat}}"/>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Update Data
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

@stop