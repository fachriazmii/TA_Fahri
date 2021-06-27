<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pendaftaran Sidang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SKTA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Sidang</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>File Persyaratan Daftar Sidang</h3>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label for="file_daftar" class="form-label">File Pendaftaran Sidang</label><br>
                                <input type="file" name="file_daftar" id="file_daftar">
                                <input class="form-control" name="link_daftar" id="link_daftar" placeholder="Link cloud file">
                            </div>
                            <div class="mb-3">
                                <label for="file_laporan_ta" class="form-label">File Laporan TA</label><br>
                                <input type="file" name="file_laporan_ta" id="file_laporan_ta">
                                <input class="form-control" name="link_laporan_ta" id="link_laporan_ta" placeholder="Link cloud file">
                            </div>
                            <div class="mb-3">
                                <label for="file_eprt" class="form-label">File EPRT</label><br>
                                <input type="file" name="file_eprt" id="file_eprt">
                                <input class="form-control" name="link_eprt" id="link_eprt" placeholder="Link cloud file">
                            </div>
                            <div class="mb-3">
                                <label for="file_tak" class="form-label">File TAK</label><br>
                                <input type="file" name="file_tak" id="file_tak">
                                <input class="form-control" name="link_tak" id="link_tak" placeholder="Link cloud file">
                            </div>
                            <div class="mb-3">
                                <label for="file_bimbingan" class="form-label">File Bukti Bimbingan</label><br>
                                <input type="file" name="file_bimbingan" id="file_bimbingan">
                                <input class="form-control" name="link_bimbingan" id="link_bimbingan" placeholder="Link cloud file">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>