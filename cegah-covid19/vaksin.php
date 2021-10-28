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

    <title>Cegah Covid-19 | Daftar Vaksin</title>
  </head>
  <body>
    <?php require_once 'layout/navbar2.php'; ?>
    <div class="container" id="vaksin">
        <section>
            <div class="daftar-vaksin" id="daftar-vaksin">
                <img src="img/pakai-masker.png" alt="">
                <h3 class="title">Ayo Daftar Vaksin Sekarang</h3>
                <br>
                <br>
                <div class="alert alert-success alert-dismissible fade show pesan-success d-none" role="alert">
                    <h6>Terima Kasih Telah Mendaftar!, kami akan menghubungi Anda melalui email....</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form class="daftar" name="submit-daftar-vaksin">
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
        </section>

    </div>

    <?php require_once 'layout/footer.php' ?>

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