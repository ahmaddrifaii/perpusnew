<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
     <link rel="stylesheet" href="bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>
  </head>
  <body>

    <div class="container">
      <div class="content">
        <div class="card" style="margin-top: 12rem;">
          <div class="row">
            <div class="col m-3">
              <form action="aksi/cek_login.php" method="post">
                <h2> Silahkan Login Untuk Melanjutkan </h2>
                <?php
                if (isset($_GET['pesan'])) {
                  if ($_GET['pesan']=="gagal") {
                  echo"<div class='alert alert-danger'>Username atau Password Anda Salah</div> ";
                }
              }
                ?>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="name" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <p class="mt-3">Saya Belum Memiliki Akun. Buat <a href="registrasi.php"class="btn btn-warning">Disini</a></p>
              </div>
              <div class="col">
              <img src="asset/image/3.jpg" width="600" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
     
  </body>
</html>