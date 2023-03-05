<?php $title = "Odontogram Pasien"; ?>

@extends('layouts/index')

@section('content')

<style>
    #my_camera {
        width: 340px;
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
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{ route('update-kunjungan') }}">
                            @csrf
                            <input type="hidden" name="id" value='{{$odontogram->id}}'>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Pasien</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" class="form-control" name="nama" rows="3" placeholder="Nama Lengkap" value="{{ $pasien->nama }}" disabled />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Dokter Penangan</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" name="dokter" class="form-control" rows="3" placeholder="Nama Dokter" value="{{ $odontogram->dokter }}" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kunjungan Terakhir</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="date" name="tanggal_kunjungan" class="form-control" rows="3" value="{{ $odontogram->tanggal_kunjungan }}" />
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Update Data Odontogram
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Odontogram</h3>
                        <div class="row justify-content-between  pt-2">
                            <div class="col-6 col-lg-6">
                                @foreach ($kondisigigi as $key => $val)
                                    @if (($loop->index + 1) >= 6)
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @else
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @endif
                                    <div class="modal" id="modal-gigi-{{ $key }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
        
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Data Gigi</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('update-odontogram') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="odo_id" value="{{$odontogram->id}}">
                                                    <input type="hidden" name="key" value="{{$key}}">
                                                    <input type="hidden" name="image" class="image-tag" data-image-id="{{ $key }}">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6 image-classification px-3" data-image-id="{{ $key }}">
                                                                <img src="{{asset('storage/images/'.$pasien->no_rekam_medik.'/'.$key.'.png')}}" alt="image-placeholder" class="img-fluid" />
                                                            </div>
                                                            <div class="col-md-6 my_camera px-3" data-camera-id="{{ $key }}">
                                                                <img class="mx-auto img-fluid" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" />
                                                            </div>
                                                            <div class="row pt-4">
                                                                <div class="mx-auto">
                                                                    <input class="btn btn-primary" type=button value="Start Cam" onClick="configure('{{ $key }}')">
                                                                    <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot('{{ $key }}')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text" >Kondisi Gigi</label>
                                                                    <select name="status" class="form-select" >
                                                                        <!-- <option selected="">Pilih . . .</option> -->
                                                                        <option value="karies" {{ $val == 'karies' ? 'selected' : '' }}>Karies</option>
                                                                        <option value="normal" {{ $val == 'normal' ? 'selected' : '' }}>Normal</option>
                                                                        <option value="sisa_akar" {{ $val == 'sisa_akar' ? 'selected' : '' }}>Sisa Akar</option>
                                                                        <option value="tumpatan" {{ $val == 'tumpatan' ? 'selected' : '' }}>Tumpatan</option>
                                                                        <option value="impaksi" {{ $val == 'impaksi' ? 'selected' : '' }}>Impaksi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                                <!-- Modal body -->
        
                                            </div>
                                        </div>
                                    </div>
                                    @if (($loop->index + 1) == 8)
                                        @break;
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-6 col-lg-6 d-flex justify-content-end">
                                @foreach ($kondisigigi as $key => $val)
                                    @if (($loop->index + 1) <= 8)
                                        @continue;
                                    @endif
                                    @if (($loop->index + 1) <= 11)
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @else
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @endif
                                    <div class="modal" id="modal-gigi-{{ $key }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
        
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Data Gigi</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('update-odontogram') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="odo_id" value="{{$odontogram->id}}">
                                                    <input type="hidden" name="key" value="{{$key}}">
                                                    <input type="hidden" name="image" class="image-tag" data-image-id="{{ $key }}">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6 image-classification px-3" data-image-id="{{ $key }}">
                                                                <img src="{{asset('storage/images/'.$pasien->no_rekam_medik.'/'.$key.'.png')}}" alt="image-placeholder" class="img-fluid" />
                                                            </div>
                                                            <div class="col-md-6 my_camera px-3" data-camera-id="{{ $key }}">
                                                                <img class="mx-auto img-fluid" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" />
                                                            </div>
                                                            <div class="row pt-4">
                                                                <div class="mx-auto">
                                                                    <input class="btn btn-primary" type=button value="Start Cam" onClick="configure('{{ $key }}')">
                                                                    <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot('{{ $key }}')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text" >Kondisi Gigi</label>
                                                                    <select name="status" class="form-select" >
                                                                        <!-- <option selected="">Pilih . . .</option> -->
                                                                        <option value="karies" {{ $val == 'karies' ? 'selected' : '' }}>Karies</option>
                                                                        <option value="normal" {{ $val == 'normal' ? 'selected' : '' }}>Normal</option>
                                                                        <option value="sisa_akar" {{ $val == 'sisa_akar' ? 'selected' : '' }}>Sisa Akar</option>
                                                                        <option value="tumpatan" {{ $val == 'tumpatan' ? 'selected' : '' }}>Tumpatan</option>
                                                                        <option value="impaksi" {{ $val == 'impaksi' ? 'selected' : '' }}>Impaksi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                                <!-- Modal body -->
        
                                            </div>
                                        </div>
                                    </div>
                                    @if (($loop->index + 1) == 16)
                                        @break;
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-6 col-lg-6">
                                @foreach ($kondisigigi as $key => $val)
                                    @if (($loop->index + 1) <= 16)
                                        @continue;
                                    @endif
                                    @if (($loop->index + 1) >= 22)
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @else
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @endif
                                    <div class="modal" id="modal-gigi-{{ $key }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
        
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Data Gigi</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('update-odontogram') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="odo_id" value="{{$odontogram->id}}">
                                                    <input type="hidden" name="key" value="{{$key}}">
                                                    <input type="hidden" name="image" class="image-tag" data-image-id="{{ $key }}">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6 image-classification px-3" data-image-id="{{ $key }}">
                                                                <img src="{{asset('storage/images/'.$pasien->no_rekam_medik.'/'.$key.'.png')}}" alt="image-placeholder" class="img-fluid" />
                                                            </div>
                                                            <div class="col-md-6 my_camera px-3" data-camera-id="{{ $key }}">
                                                                <img class="mx-auto img-fluid" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" />
                                                            </div>
                                                            <div class="row pt-4">
                                                                <div class="mx-auto">
                                                                    <input class="btn btn-primary" type=button value="Start Cam" onClick="configure('{{ $key }}')">
                                                                    <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot('{{ $key }}')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text" >Kondisi Gigi</label>
                                                                    <select name="status" class="form-select" >
                                                                        <!-- <option selected="">Pilih . . .</option> -->
                                                                        <option value="karies" {{ $val == 'karies' ? 'selected' : '' }}>Karies</option>
                                                                        <option value="normal" {{ $val == 'normal' ? 'selected' : '' }}>Normal</option>
                                                                        <option value="sisa_akar" {{ $val == 'sisa_akar' ? 'selected' : '' }}>Sisa Akar</option>
                                                                        <option value="tumpatan" {{ $val == 'tumpatan' ? 'selected' : '' }}>Tumpatan</option>
                                                                        <option value="impaksi" {{ $val == 'impaksi' ? 'selected' : '' }}>Impaksi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                                <!-- Modal body -->
        
                                            </div>
                                        </div>
                                    </div>
                                    @if (($loop->index + 1) == 24)
                                        @break;
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-6 col-lg-6 d-flex justify-content-end">
                                @foreach ($kondisigigi as $key => $val)
                                    @if (($loop->index + 1) <= 24)
                                        @continue;
                                    @endif
                                    @if (($loop->index + 1) <= 27)
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'1.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @else
                                    <img id="{{ $key }}" src="{{asset('images/'. $val .'.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#modal-gigi-{{ $key }}" />
                                    @endif
                                    <div class="modal" id="modal-gigi-{{ $key }}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
        
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Data Gigi</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('update-odontogram') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="odo_id" value="{{$odontogram->id}}">
                                                    <input type="hidden" name="key" value="{{$key}}">
                                                    <input type="hidden" name="image" class="image-tag" data-image-id="{{ $key }}">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6 image-classification px-3" data-image-id="{{ $key }}">
                                                                <img src="{{asset('storage/images/'.$pasien->no_rekam_medik.'/'.$key.'.png')}}" alt="image-placeholder" class="img-fluid" />
                                                            </div>
                                                            <div class="col-md-6 my_camera px-3" data-camera-id="{{ $key }}">
                                                                <img class="mx-auto img-fluid" src="{{asset('images/placeholder.png')}}" alt="image-placeholder" />
                                                            </div>
                                                            <div class="row pt-4">
                                                                <div class="mx-auto">
                                                                    <input class="btn btn-primary" type=button value="Start Cam" onClick="configure('{{ $key }}')">
                                                                    <input class="btn btn-primary" type=button value="Capture" onClick="take_snapshot('{{ $key }}')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text" >Kondisi Gigi</label>
                                                                    <select name="status" class="form-select" >
                                                                        <!-- <option selected="">Pilih . . .</option> -->
                                                                        <option value="karies" {{ $val == 'karies' ? 'selected' : '' }}>Karies</option>
                                                                        <option value="normal" {{ $val == 'normal' ? 'selected' : '' }}>Normal</option>
                                                                        <option value="sisa_akar" {{ $val == 'sisa_akar' ? 'selected' : '' }}>Sisa Akar</option>
                                                                        <option value="tumpatan" {{ $val == 'tumpatan' ? 'selected' : '' }}>Tumpatan</option>
                                                                        <option value="impaksi" {{ $val == 'impaksi' ? 'selected' : '' }}>Impaksi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                                <!-- Modal body -->
        
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('footer_script')
<script language="JavaScript">
    // Configure a few settings and attach camera
    function configure(element) {
        let cam = document.querySelector('.my_camera[data-camera-id="'+ element +'"]')
        console.log(cam)
        Webcam.set({
            width: 370,
            height: 280,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach(cam);
    }
    // A button for taking snaps


    function take_snapshot(element) {
        // take snapshot and get image data
        Webcam.snap(function(data_uri) {
            // display results in page
            document.querySelector(`.image-classification[data-image-id="${element}"]`).innerHTML = '<img class="img-thumbnail" id="imageprev" src="' + data_uri + '"/>';
            $(`.image-tag[data-image-id="${element}"]`).val(data_uri)
        });

    }
</script>
@endpush