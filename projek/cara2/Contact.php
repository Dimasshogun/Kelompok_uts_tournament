<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- my css nggo about -->
    <style>
        section {
            min-height: 420px;
        }
    </style>

    <title>LittleBigSnake</title>
</head>

<body class="mt-5">

    <!-- fixed-top buat navbarnya tetep di atas -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">LBS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.html">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="Portofolio.php">Portofolio</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <!-- tambahin di bagian class = img-thumbnail ,
            itu buat kasih border  untuk gambar tersebut-->
            <img src="gambar/lbs_login_logo.png" width="25%" class="rounded-circle">
            <h1 class="display-4">LittleBigSnake</h1>
            <p class="lead">Selamat Datang Di Turnament LittleBigSnake</p>
        </div>
    </div>
    <section id="contact" class="contact mb-5">
        <div class="container">
            <div class="row text-center">
                <!-- pt-4 mb-4 untuk mengasih jarak -->
                <div class="col text-center pt-4 mb-4">
                    <h2>Contact US</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card text-white bg-primary mb-3 text-center">
                        <!-- <div class="card-header">Header</div> -->
                        <div class="card-body">
                            <h5 class="card-title">Contact US</h5>
                            <p class="card-text">Nothing lasts forever, we can change the future. Hey, not bad!</p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h2>Location</h2>
                        </li>
                        <li class="list-group-item">My Office</li>
                        <li class="list-group-item">Jl.gurame widuri pemalang</li>
                        <li class="list-group-item">West Java, Indonesia</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telp</label>
                            <input type="text" class="form-control" id="telp">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                        <div class="from-group">
                            <button type="button" class="btn btn-primary">Kirim Pesan!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>