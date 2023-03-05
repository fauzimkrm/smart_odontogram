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
                            DataTable jQuery
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 pb-2">
                        <button class="btn btn-success" onclick="location.href='/add_rekam_medis_pasien'">
                            Tambah Data
                        </button>
                    </div>
                </div>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Hp</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Akbar</td>
                            <td>akbar@gmail.com</td>
                            <td>081553070645</td>
                            <td>Jemursari</td>
                            <td>
                                <span type=button class="fa-fw select-all fas" onclick="location.href='/pasien'"></span>
                                <span type=button class="fa-fw select-all fas"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Chelsea</td>
                            <td>chelsea@gmail.com</td>
                            <td>081220336372</td>
                            <td>Margorejo</td>
                            <td>
                                <span type=button class="fa-fw select-all fas" onclick="location.href='/pasien'"></span>
                                <span type=button class="fa-fw select-all fas"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Makarim</td>
                            <td>karim@gmail.com</td>
                            <td>085194830221</td>
                            <td>Keputih</td>
                            <td>
                                <span type=button class="fa-fw select-all fas"></span>
                                <span type=button class="fa-fw select-all fas" data-bs-toggle="modal" data-bs-target="#myModal"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Basic Tables end -->
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h5>Apakah anda yakin untuk menghapus data?</h5>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="location.href='/demo_hapus_pasien'">Hapus</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            </div>

        </div>
    </div>
</div>
@stop