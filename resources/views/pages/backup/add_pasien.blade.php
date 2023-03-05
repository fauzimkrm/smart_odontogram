<?php $title = "Tambah Pasien"; ?>

@extends('layouts/index')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rekam Odontogram</h3>
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
                    <div class="card-header">
                        <h4 class="card-title">Tambah Pasien</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>No. RM</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="number" id="contact-info" class="form-control" name="contact" placeholder="No. RM" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="text" id="first-name" class="form-control" name="fname" placeholder="Nama Lengkap" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Konfirmasi Password</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Konfirmasi Password" />
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop