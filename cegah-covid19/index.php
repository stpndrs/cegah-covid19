<?php require_once 'corona.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">

    <title>Cegah Covid-19</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-28X911PMPZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-28X911PMPZ');
    </script>
  </head>
  <body>
    <?php require_once 'layout/navbar2.php'; ?>
    <div id="main-container">
        <div class="container container-body">

            <div class="bg-corona">
                <img data-svg="bg-main" src="img/gambar-corona.png" alt="">
            </div>

            <section>
                <header>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/no-image.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/no-image.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/no-image.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi officia, non et quidem porro maiores quaerat vero! Recusandae repudiandae nostrum eaque porro perspiciatis facere sequi? Tempore repudiandae iste eius libero.</h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi officia, non et quidem porro maiores quaerat vero! Recusandae repudiandae nostrum eaque porro perspiciatis facere sequi? Tempore repudiandae iste eius libero.</h6>
                            </div>
                        </div>
                    </div>
                </header>
            </section>
            
            <section class="data-covid">
                <h1 class="title">Data Penyebaran Covid 19</h1>
                <br>
                <br>
                <!-- <div class="row">
                    <h3 class="title">Global</h3>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL POSITIF</h5>
                            <h1><?= $jumlah_positif;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL SEMBUH</h5>
                            <h1><?= $jumlah_sembuh;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL MENINGGAL</h5>
                            <h1><?= $jumlah_meninggal;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                </div> -->
                <br>
                <br>
                <div class="row">
                    <h3 class="title">Indonesia</h3>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL POSITIF</h5>
                            <h1><?= $positif;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL SEMBUH</h5>
                            <h1><?= $sembuh;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL MENINGGAL</h5>
                            <h1><?= $meninggal;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg">
                        <div class="card " style="width: fit-content; margin-left: auto; margin-right: auto;">
                            <a href="data-covid">Lihat Data Per-Provinsi</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <section>
                <div class="pengertian">
                    <h3 class="title">
                        Yang harus kita ketahui....
                    </h3>
                    <img src="img/apa-itu-covid.png" alt="">
                    <br>
                    <br>
                    <div class="desc">
                        <h4>Apa itu Covid-19?</h4>
                        <p>COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.</p>
                        <p>COVID-19 (coronavirus disease 2019) adalah jenis penyakit baru yang disebabkan oleh virus dari golongan coronavirus, yaitu SARS-CoV-2 yang juga sering disebut virus Corona.</p>
                        <br>
                        <h4>Apa Penyebab Covid-19?</h4>
                        <p>COVID-19 disebabkan oleh SARS-CoV-2, yaitu virus jenis baru dari coronavirus (kelompok virus yang menginfeksi sistem pernapasan). Infeksi virus Corona bisa menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu, atau infeksi sistem pernapasan dan paru-paru, seperti pneumonia.</p>
                        <p>Pada penghujung tahun 2020, beberapa laporan kasus menyebutkan bahwa virus Corona telah bermutasi menjadi beberapa jenis atau varian baru, misalnya varian delta.</p>
                    </div>
                </div>
                <p class="refrensi" style="font-size: x-small;"><i>Refrensi : <a href="https://www.alodokter.com/covid-19">https://www.alodokter.com/covid-19</a></i></p>
            </section>
            <br>
            <br>
            <section>
                <div class="berita">
                    <h1 class="title">Berita Terbaru</h1>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, soluta.</h5>
                                <p>Kamis, 28 Oktober 2021</p>
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, tenetur accusantium debitis sequi cum et sint, dolorum voluptates assumenda, ullam cumque quas ipsum quam doloremque asperiores neque eum dolor recusandae.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, soluta.</h5>
                                <p>Kamis, 28 Oktober 2021</p>
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, tenetur accusantium debitis sequi cum et sint, dolorum voluptates assumenda, ullam cumque quas ipsum quam doloremque asperiores neque eum dolor recusandae.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/no-image.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, soluta.</h5>
                                <p>Kamis, 28 Oktober 2021</p>
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, tenetur accusantium debitis sequi cum et sint, dolorum voluptates assumenda, ullam cumque quas ipsum quam doloremque asperiores neque eum dolor recusandae.</h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card " style="width: fit-content; margin-left: auto; margin-right: auto;">
                                <a href="#">Berita Lainnya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
    

    <?php require_once 'layout/footer.php'; ?>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyEKTQRycl1FuBX4gdarPnhqMjNjHj_QOprFoqnE58YUUqFhDNIIiE4uSsRmGRaqH8E/exec'
        const form = document.forms['submit-daftar-vaksin'];
        const pesan = document.querySelector('.pesan-success');

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                // tampilkan alert
                pesan.classList.toggle('d-none');
                // reset form
                form.reset();
                console.log('Success!', response)
            })
            .catch(error => console.error('Error!', error.message))
        })
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>