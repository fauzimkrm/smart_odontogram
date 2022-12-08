<?php $title = "Home"; ?>

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
        <div class="row">

            <div class="col-lg-8 col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('webcam.capture') }}">
                            @csrf
                            <div class="mx-auto" id="my_camera">
                                <img class="mx-auto" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" style="opacity: 0.5; weight: 290px; height:490px;" />
                            </div>
                            <div class="row pt-4">
                                <div class="mx-auto">
                                    <input class="btn btn-primary" type=button value="Start Cam" onClick="configure()">
                                    <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot()">
                                    <input type="hidden" name="image" class="image-tag">
                                    <button class="btn btn-success">Save Picture</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12">
                <div class="card">
                <form method="POST" action="{{ route('webcam.classify') }}">
                    @csrf
                    <div class="card-body">
                        <div class="mx-auto" id="results">
                            <img src="{{asset('images/placeholder.png')}}" alt="image-placeholder" style="opacity: 0.5; weight: 200px; height:200px;" />
                        </div>
                        <input type="hidden" name="image" class="image-tag" value="{{asset('/images/graham.png')}}">
                        <div class="pt-2"><button class="btn btn-success">Classify</button></div>
                    </div>
                </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Hasil Klasifikasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
</script>
@stop