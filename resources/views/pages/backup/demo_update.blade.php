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
                    <div class="card-header">
                        <h4 class="card-title">I. Anamnesis</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
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
                                            <label>Tanggal Kunjungan</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="date" class="form-control" name="tanggal_kunjungan" placeholder="Tanggal Kunjungan" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kedatangan</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kedatangan" id="kedatangan_sendiri" checked />
                                                <label class="form-check-label" for="kedatangan_sendiri">
                                                    Sendiri
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kedatangan" id="kedatangan_rujukan" />
                                                <label class="form-check-label" for="kedatangan_rujukan">
                                                    Rujukan
                                                </label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" name="kedatangan" id="kedatangan" placeholder="Rujukan Dari" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Riwayat Penyakit</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Riwayat Penyakit"></textarea>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Riwayat Perawatan Gigi dan Mulut</label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="riwayat" id="riwayat_belum" checked />
                                                <label class="form-check-label" for="riwayat_belum">
                                                    Belum Pernah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="riwayat" id="riwayat_pernah" />
                                                <label class="form-check-label" for="riwayat_pernah">
                                                    Pernah
                                                </label>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" id="riwayat" name="tanggal_kunjungan" placeholder="Riwayat Perawatan" disabled />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label>Riwayat Penyakit Sistematik dan Keadaan Umum Lainnya / Riwayat Medis : </label>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Sistem kardiovaskular</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kardiovaskular" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kardiovaskular" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kardiovaskular" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Hipertensi</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hipertensi" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hipertensi" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_hipertensi" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Eksim, alergi, penyakit kulit, dll</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="penyakit_kulit" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="penyakit_kulit" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_penyakit_kulit" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Diabetes melitus</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="diabetes" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="diabetes" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_diabetes" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Kelainan pernapasan</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_pernapasan" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_pernapasan" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kel_pernapasan" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Penyakit ginjal</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="penyakit_ginjal" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="penyakit_ginjal" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_penyakit_ginjal" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Kelainan Endokrin</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_endokrin" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_endokrin" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kel_endokrin" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Keganasan / kanker</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kanker" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kanker" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kanker" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Berkebutuhan khusus</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="berkeb_khusus" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="berkeb_khusus" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_berkeb_khusus" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>Pasca bedah atau perawatan</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pasca_bedah" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pasca_bedah" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_pasca_bedah" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-md-2">
                                            <label>HIV, AIDS</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hiv" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hiv" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_hiv" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kelainan pencernaan</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_pencernaan" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_pencernaan" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kel_pencernaan" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Epilepsi</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="epilepsi" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="epilepsi" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_epilepsi" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kelainan kelenjar ludah</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_ludah" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_ludah" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kel_ludah" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Hepatitis</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hepatitis" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hepatitis" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_hepatitis" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kontrasepsi</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kontrasepsi" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kontrasepsi" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kontrasepsi" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Hamil</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hamil" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hamil" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_hamil" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kelainan saraf</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_saraf" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kel_saraf" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_kel_saraf" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Kecenderungan pendarahan</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pendarahan" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pendarahan" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_pendarahan" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>
                                        <div class="col-md-2">
                                            <label>Imunisasi tetanus</label>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tetanus" id="disangkal" />
                                                <label class="form-check-label" for="disangkal">
                                                    Disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tetanus" id="tidak disangkal" />
                                                <label class="form-check-label" for="tidak disangkal">
                                                    Tidak disangkal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="ket_tetanus" placeholder="Keterangan (obat, alat, dll)" />
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Update
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
                            <div class="pt-2"><button class="btn btn-success">Save and Classify</button></div>
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
                            <h4>Kondisi Gigi : </span>
                                <h3 id="kondisi_gigi"></h3>
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
                                <img id="kondisi_gigi2" src="{{asset('images/caries.png')}}" alt="normal" type="button" style="height: 60px; width: 60px;" data-bs-toggle="modal" data-bs-target="#myModal"/>
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
                        <img src="{{asset('images/karies_6.JPG')}}" alt="image-placeholder" style="opacity: 0.5; weight: 300px; height:200px;" />
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
            // $("#jenis_gigi_"+count).html(result.jenis_gigi);
            // $("#kondisi_gigi_"+count).html(result.kondisi_gigi);
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
@stop