<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
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
                        <a class="nav-link" aria-current="page" href="<?= base_url(""); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="send" href="#">Kirim Info Harian ke Group Telegram</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://t.me/+04JQ9QHP1jhmMmM1" class="nav-link" target="_blank">Gabung Group</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-white">Pukul : <span id="now"></span></span>
                    </li>
                </ul>
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
                    <p>Update terakhir : <span id="updateTanggal"></span></p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2 id="positifNegara"></h2>
                                <p>Positif</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2 id="sembuhNegara"><i class="blink">menunggu data</i></h2>
                                <p>Sembuh</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-orange">
                                <h2 id="meninggalKasusNegara"></h2>
                                <p>Meninggal Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <h2>Harian <span class="material-symbols-outlined">
                            event
                        </span></h2>
                    <p>Update terakhir : <span id="updateTanggal2"></span></p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2 id="positifHarian"></h2>
                                <p>Positif</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2 id="sembuhHarian"><i class="blink">menunggu data</i></h2>
                                <p>Sembuh</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-dark">
                                <h2 id="meninggalHarian"></h2>
                                <p>Meninggal Dunia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h2>Statistika <span class="material-symbols-outlined">
                        travel_explore
                    </span></h2>
                <canvas id="myChart" width="400" height="250"></canvas>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

        function formatTanggal(inputDate) {
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
            //Data Instrumen Grafik
            let datass = [];
            let labelss = [];
            //Data global
            $.ajax({
                url: 'https://api.covid19api.com/summary', //url tujuan 
                type: 'GET', // metode request post
                dataType: 'json', // format data yang dikembalikan dari server
                success: function(response) {
                    const tanggal = formatTanggal(new Date(response.Global.Date));
                    $("#tanggal").html(tanggal);
                    $("#globalTerkonfirmasi").html(response.Global.TotalConfirmed.toLocaleString('en-US'));
                    $("#globalMeninggal").html(response.Global.TotalDeaths.toLocaleString('en-US'));
                    // globalMeninggal
                }
            });

            $.ajax({
                url: "<?= base_url("getKasus"); ?>",
                type: "GET",
                dataType: "json",
                success: function(res) {
                    const tanggalcase = formatTanggal(new Date(res.tanggalIndonesia));
                    $("#updateTanggal").html(tanggalcase);
                    $("#positifNegara").html(res.dataIndonesia.update.total.jumlah_positif.toLocaleString('en-US'));
                    $("#sembuhNegara").html(res.dataIndonesia.update.total.jumlah_sembuh.toLocaleString('en-US'));
                    $("#meninggalKasusNegara").html(res.dataIndonesia.update.total.jumlah_meninggal.toLocaleString('en-US'));

                    $("#updateTanggal2").html(tanggalcase);
                    $("#positifHarian").html(res.dataHarian.jumlah_positif.toLocaleString('en-US'));
                    $("#sembuhHarian").html(res.dataHarian.jumlah_sembuh.toLocaleString('en-US'));
                    $("#meninggalHarian").html(res.dataHarian.jumlah_meninggal.toLocaleString('en-US'));

                    for (let i = 0; i < res.kasus.length; i++) {
                        const elementData = res.kasus[i].jumlah_positif.value;
                        const tanggalGrafik = formatTanggal(new Date(res.kasus[i].key_as_string));
                        datass.push(elementData);
                        labelss.push(tanggalGrafik);
                    }
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labelss,
                            datasets: [{
                                label: 'Kasus',
                                data: datass,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
            });
        });
        $("#send").click(function() {
            $.ajax({
                url: "<?= base_url("sendTelegram"); ?>",
                method: "GET",
                dataType: "json",
                beforeSend: function() {
                    let timerInterval
                    Swal.fire({
                        title: 'Tunggu Sebentar Yaa',
                        timer: 20000,
                        timerProgressBar: false,
                        showConfirmButton: false,
                    })
                },
                success: function(res) {
                    if (res.status === "success") {
                        Swal.fire({
                            title: '<strong>Berhasil dikirim</strong>',
                            icon: 'success',
                        })
                    } else {
                        console.log('Not');
                        console.log(res);
                        Swal.fire({
                            title: res.message,
                            icon: 'error',
                        })
                    }
                },
            });
        });

        window.setTimeout(waktu(), 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            var jam = waktu.getHours();
            var menit = waktu.getMinutes();
            var detik = waktu.getSeconds();

            $('#now').html(`${jam}:${menit}:${detik}`);
        }
    </script>
</body>

</html>