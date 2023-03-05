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
                <!-- <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            DataTable jQuery
                        </li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 pb-2">
                        <button class="btn btn-success" onclick="location.href='/tambah-pasien'">
                            Pemeriksaan Baru
                        </button>
                    </div>
                </div>
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No. Rekam Medik</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPasien as $item)

                        <tr>
                            <td>{{ $item->no_rekam_medik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->jenis_kelamin == "0" ? "Laki - Laki" : "Perempuan"}}</td>
                            <td>
                                <a href="{{ route('edit-pasien', [$item->id]) }}"><span type=button class="fa-fw select-all fas"></span></a>
                                <a href="{{ route('delete-pasien', [$item->id]) }}"><span type=button class="fa-fw select-all fas" style="color:red;"></span></a>
                                <a href="{{ route('show-odontogram', [$item->id]) }}"><span class="fa-fw select-all fas" style="color:blanchedalmond"></span></a>
                            </td>
                        </tr>

                        @endforeach
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