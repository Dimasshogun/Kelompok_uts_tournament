<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form Pendaftaran</title>
</head>

<body>
    <!-- fixed-top buat navbarnya tetep di atas -->
    <!-- fixed-top buat navbarnya tetep di atas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mb-4">
            <a class="navbar-brand" href="index.html">LBS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="Portofolio.php">Portofolio</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="maps.php">Maps</a>
                        </div>
                    </li>
                    <a class="nav-item nav-link" href="Contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">Formulir Pendaftaran Turnament LittleBigSnake</h2>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <!-- dibawah ini buat disampingnya -->
                <!-- <div class="row"> -->
                <!-- <div class="col-md-3"> -->
                <!-- <label>Nama Lengkap</label> -->
                <!-- </div> -->
                <!-- <div class="col-md-9"> -->
                <!-- <input type="text" name="" class="form-control" placeholder="Masukan Nama Lengkap Anda"> -->
                <!-- </div> -->
                <!-- </div> -->

                <!-- sesudah label ada for dan diwabahnya ada id
                for dan id untuk klo ngeklik nama lengkap akan otomatis
                masuk ke bagian pengisian-->
                <label for="Namalengkap">Nama Lengkap</label>
                <input id="Namalengkap" type="  " name="Nama" class="form-control" placeholder="Masukan Nama Lengkap Anda">
            </div>

            <!-- tempat dan tanggal lahir berjejeran menyamping -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TempatLahir">Tempat Lahir</label>
                        <input id="TempatLahir" type="text" name="TempatLahir" class="form-control" placeholder="Masukan Tempat Lahir Anda">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tl">Tanggal Lahir</label>
                        <input id="tl" type="date" name="tl" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="">Pili Jurusan</label>
                <select name="jurusan" id="" class="form-control">
                    <option value="">1. Teknik Informatika</option>
                    <option value="">2. Teknik Mesin</option>
                    <option value="">3. Teknik Komputer</option>
                    <option value="">4. Farmasi</option>
                    <option value="">5. Bidan</option>
                </select>
            </div>

            <div class="font-group">
                <label for="alasan">Alasan Mengikuti Turnament Ini</label>
                <textarea name="alasan" id="alasan" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <!-- kalo mau kesamping cuma tambihin di setiap 
                <div class="form-check"> di tambahi <div class="form-check-inline">
                dan di belakang tabel kolom di kasih br biar pilihannya di bawahnya
                jenis kelamin-->
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <div class="form-check" name="">
                    <input type="radio" class="from-check-input" name="radio1" id="radio2" checked="">
                    <label for="">laki-Laki</label>
                </div>
                <!-- name="radio1" id="radio2" untuk biar user memilih salah satu -->
                <div class="form-check">
                    <input type="radio" class="from-check-input" name="radio1" id="radio2">
                    <label for="">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="">Upload Dokumen</label>
                <input type="file" name="" id="" class="form-control-file">
                <small>upload File dengan Ukuran Maksimal 2mb</small><br>
                <!-- <button type="submit" class="btn btn-primary"name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button> -->
            </div>
            <div class="row mb-4">
                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
            </div>

            <!-- maps -->
            <!-- <div class="form-group">
                <label for="">Maps</label>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4932.318112396874!2d109.37664632161344!3d-6.8661632976926645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fdaad58241849%3A0x28bb1769f7a1e885!2zNsKwNTInMDQuMSJTIDEwOcKwMjInNDQuNyJF!5e1!3m2!1sid!2sid!4v1586529010906!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> -->
        </form>
    </div>


    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>DimasShogun.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>