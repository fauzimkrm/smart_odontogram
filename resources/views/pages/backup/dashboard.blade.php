<?php $title = "Dashboard"; ?>

@extends('layouts/index')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
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
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body px-10 py-4-5">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <img src="{{asset('/images/patients.png')}}" style="height:30px; width: 30px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Jumlah Pasien
                                        </h6>
                                        <h6 class="font-extrabold mb-0">221</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <img src="{{asset('/images/doctor-consultation.png')}}" style="height:30px; width: 30px;">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Kunjungan</h6>
                                        <h6 class="font-extrabold mb-0">2.112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <img src="{{asset('/images/dentist.png')}}" style="height:30px; width: 30px;">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Dokter</h6>
                                        <h6 class="font-extrabold mb-0">8</h6>
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
@stop