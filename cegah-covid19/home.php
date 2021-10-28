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

    <title>Covid 19 Data</title>
  </head>
  <body>
    <?php require_once 'layout/navbar.php'; ?>
    
    <div class="container container-body">
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/no-image.png" class="tales d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/no-image.png" class="tales d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/no-image.png" class="tales d-block w-100" alt="...">
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
        </div> -->
        <h1 class="title">Data Penyebaran Covid 19</h1>
        <br>
        <br>
        <div class="row">
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
        </div>
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
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-title">TOTAL SEMBUH</h5>
                    <h1><?= $sembuh;?></h1>
                    <p class="card-text">ORANG</p>
                </div>
            </div>
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
            <h3 class="title">Data Provinsi</h3>
            <br>
            <div class="col-lg">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Positif</th>
                            <th scope="col">Sembuh</th>
                            <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=1;
                        foreach ($data_prov as $rows) { ?>
                        <tr>
                            <th scope="row"><?= $no;?></th>
                            <td><?= $rows->attributes->Provinsi;?></td>
                            <td><?= $rows->attributes->Kasus_Posi;?></td>
                            <td><?= $rows->attributes->Kasus_Semb;?></td>
                            <td><?= $rows->attributes->Kasus_Meni;?></td>
                        </tr>
                        <?php 
                        $no++;
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <!-- <div class="berita">
            <div class="row">
                <h3 class="title">Berita</h3>
                <div class="col-lg">
                    <div class="card">
                        <h3 class="title">Berita 1</h3>
                        img.
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <h3 class="title">Berita 1</h3>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <h3 class="title">Berita 1</h3>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="daftar-vaksin">
            <img src="img/pakai-masker.png" alt="">
            <h3 class="title">Ayo Daftar Vaksin Disini</h3>
            <div class="alert alert-success alert-dismissible fade show pesan-success d-none" role="alert">
                    <h6>Thank you for sending message!</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <br>
            <br>
            <form class="daftar" name="submit-daftar-vaksin">
                <div class="alert alert-success alert-dismissible fade show pesan-success d-none" role="alert">
                    <h6>Terima Kasih, Anda Sudah Absen!</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show pesan-gagal d-none" role="alert">
                    <h6>Absen Gagal, Silahkan Hubungi Admin!</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <br>
                <br>
                <h3>Email Anda</h3>
                <input type="email" name="Email" placeholder="Masukkan Email Anda Disini...." required>
                <hr>
                <br>
                <br>
                <h3>Nama Lengkap Anda</h3>
                <input type="text" name="Nama Lengkap" placeholder="Masukkan Nama Lengkap Anda Disini...." required>
                <hr>
                <br>
                <br>
                <h3>Nomor Telepon Anda</h3>
                <input type="text" name="Nomor Telepon" placeholder="Masukkan Nomor Telepon Anda Disini...." required>
                <hr>
                <br>
                <br>
                <h3>NIK</h3>
                <input type="text" name="NIK" placeholder="Masukkan NIK Anda Disini...." required>
                <hr>
                <br>
                <br>
                <button type="submit" class="btn btn-secondary">Daftar Sekarang</button>
                <br>
                <br>
            </form>
        </div>

    </div>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyEKTQRycl1FuBX4gdarPnhqMjNjHj_QOprFoqnE58YUUqFhDNIIiE4uSsRmGRaqH8E/exec'
        const form = document.forms['submit-daftar-vaksin']
        const pesanOk = document.querySelector('.pesan-success');
        const pesanNo = document.querySelector('.pesan-gagal');

        fetch(scriptURL, { method: 'POST', body: formData})
          .then(response => {
            // tampilkan alert
            pesanOk.classList.toggle('d-none');
            // reset form
            form.reset();
            console.log('Success!', response)
        })
          .catch(error => {
            //   tampilkan alert
            pesanNo.classList.toggle('d-none');
            console.error('Error!', error.message)
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