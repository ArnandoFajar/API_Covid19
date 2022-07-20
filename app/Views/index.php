<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Merriweather&display=swap" rel="stylesheet">
    <title>Data Statistika Covid-19</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/icon.png'); ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Data Covid-19</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">

            <div class="bungkus w-100">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?= base_url('assets/img/slider.webp'); ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/img/kipi.jpeg'); ?>" alt="">
                    </div>
                    <div class="item">
                        <img src="<?= base_url('assets/img/faskesvaksin.jpeg'); ?>" alt="">
                    </div>
                </div>
            </div>
            <h1 class="mt-4">Data Sebaran</h1>
            <div class="data-sebaran col-12 mt-4">
                <h2>Global <span class="material-symbols-outlined">
                        public
                    </span></h2>
                <div class="col-md-12">
                    <p>Update terakhir : <span id="tanggal"></span></p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-yellow">
                                <h2 id="globalNegara">232</h2>
                                <p>negara</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-yellow">
                                <h2 id="globalTerkonfirmasi"></h2>
                                <p>Terkonfirmasi</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-yellow">
                                <h2 id="globalMeninggal"></h2>
                                <p>Meninggal Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h2>Indonesia <span class="material-symbols-outlined">
                            travel_explore
                        </span></h2>
                    <p>Update terakhir : <?= date('d-m-Y', strtotime($tanggalIndonesia)); ?></p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2><?= number_format($dataIndonesia->update->total->jumlah_positif); ?></h2>
                                <p>Positif</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2><?= number_format($dataIndonesia->update->total->jumlah_sembuh); ?></h2>
                                <p>Sembuh</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2><?= number_format($dataIndonesia->update->total->jumlah_meninggal); ?></h2>
                                <p>Meninggal Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h2>Harian <span class="material-symbols-outlined">
                            event
                        </span></h2>
                    <p>Update terakhir : <?= date('d-m-Y', strtotime($dataHarian->created)); ?></span></p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2><?= $dataHarian->jumlah_positif; ?></h2>
                                <p>Positif</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2><?= $dataHarian->jumlah_sembuh; ?></h2>
                                <p>Sembuh</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2><?= $dataHarian->jumlah_meninggal; ?></h2>
                                <p>Meninggal Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                items: 1,
                autoplay: true,
                autoplayHoverPause: true,
                nav: false,
                // dots: false
            });
        });

        function format(inputDate) {
            let date, month, year;

            date = inputDate.getDate();
            month = inputDate.getMonth() + 1;
            year = inputDate.getFullYear();

            date = date
                .toString()
                .padStart(2, '0');

            month = month
                .toString()
                .padStart(2, '0');

            return `${date}-${month}-${year}`;
        }

        $(document).ready(function() {
            //Data global
            $.ajax({
                url: 'https://api.covid19api.com/summary', //url tujuan 
                type: 'GET', // metode request post
                dataType: 'json', // format data yang dikembalikan dari server
                success: function(response) {
                    console.log(response.Countries.length);
                    const tanggal = format(new Date(response.Global.Date));
                    $("#globalNegara").html(response.Countries.length);
                    $("#tanggal").html(tanggal);
                    $("#globalTerkonfirmasi").html(response.Global.TotalConfirmed.toLocaleString('en-US'));
                    $("#globalMeninggal").html(response.Global.TotalDeaths.toLocaleString('en-US'));
                    // globalMeninggal
                    console.log(response.Date);
                }
            });
        });
    </script>
</body>

</html>