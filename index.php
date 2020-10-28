<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Covid 19</title>
</head>

<body>
    <div class="overlay" id="overlay"></div>

    <div class="bar" id="bar">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-content-center">
                <img class="mr-3" src="assets/shield.png" width="20" height="25" class="d-inline-block align-top" alt="" loading="lazy">
                <h6>Covid19 <span>Tracker</span></h6>
            </div>
            <img id="close" src="assets/toggle-close.svg" alt="">
        </div>
        <hr>
        <h7 class="d-block mt-2">Overview</h7>
        <h7 class="d-block mt-2">News</h7>
        <h7 class="d-block mt-2">Country</h7>
        <h7 class="d-block mt-2">City</h7>
        <h7 class="d-block mt-2">Top Effected</h7>
    </div>

    <img src="assets/bg.png" class="shape">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img class="mr-3" src="assets/shield.png" width="30" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                <h1>Covid19 <span>Tracker</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img id="toggle" src="assets/toggle.png" alt="">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Overview <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">City</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Effected</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="row mt-5">
            <div class="col-12 col-lg-4">
                <img class="img-people" src="assets/people.png" alt="">
            </div>
            <div class="col-12 col-lg-8">
                <div class="row wrap-card">
                    <div class="col-12 col-lg-6 mt-4 padding-cs">
                        <div class="card bg-card-1">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/1.png" alt="">
                            <h3>KASUS AKTIF</h3>
                            <p id="data-perawatan"></p>
                            <p>Orang</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4 padding-cs">
                        <div class="card bg-card-2">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/2.png" alt="">
                            <h3>TERKONFIRMASI</h3>
                            <p id="data-positif"></p>
                            <p>Orang</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4 padding-cs">
                        <div class="card bg-card-3">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/3.png" alt="">
                            <h3>SEMBUH</h3>
                            <p id="data-sembuh"></p>
                            <p>Orang</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4 padding-cs">
                        <div class="card bg-card-4">
                            <div class="shape-hr"></div>
                            <img class="shape-card" src="assets/4.png" alt="">
                            <h3>MENINGGAL</h3>
                            <p id="data-meninggal"></p>
                            <p>Orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row w-50 mt-5 wrap-carousel">
            <h4 class="text-news">News Covid19</h4>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <img class="shape-carousel" src="assets/5.png" alt="">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h5>Bertambah pasien corona meningkat</h5>
                        <h5>pesat</h5>
                        <p>19 September 2020</p>
                    </div>
                    <div class="carousel-item">
                        <h5>Bertambah pasien corona meningkat</h5>
                        <h5>pesat</h5>
                        <p>19 September 2020</p>
                    </div>
                    <div class="carousel-item">
                        <h5>Bertambah pasien corona meningkat</h5>
                        <h5>pesat</h5>
                        <p>19 September 2020</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <img src="assets/previus.png" alt="">
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <img src="assets/next.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="api.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            getDataIndonesia();
        })
    </script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>