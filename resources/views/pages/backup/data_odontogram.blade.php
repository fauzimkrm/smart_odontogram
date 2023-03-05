<?php $title = "Data Odontogram"; ?>

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
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Karies</td>
                            <td><img src="{{asset('/images/caries.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Normal</td>
                            <td><img src="{{asset('/images/normal.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Impaksi</td>
                            <td><img src="{{asset('/images/impaksi.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Tumpatan</td>
                            <td><img src="{{asset('/images/tambalan.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Sisa Akar</td>
                            <td><img src="{{asset('/images/sisa_akar.png')}}"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Basic Tables end -->
</div>
@stop