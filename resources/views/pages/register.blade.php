<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('/css/main/app.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/main/app-dark.css ')}}" />
    <link rel="shortcut icon" href="{{asset('/images/logo/favicon.svg')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('/images/logo/favicon.png')}}" type="image/x-icon" />
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="index.html"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="index.html">
                <img src="{{asset('/images/logo/logo.svg')}}" />
            </a>
        </div>
    </nav>

    <div class="container">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Registrasi Data</h4>
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

    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>