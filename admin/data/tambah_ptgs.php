 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Petugas</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>
  </head>
  <body>

 <div class="container">
      <div class="content">
        <div class="card" style="margin-top: rem;">
          <div class="row">
            <div class="col-sm-8 m-3">
              <form action="t_ptgs.php" method="post">
                <h3> Silahkan Masukan Data Calon Petugas!</h3>
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="namalengkap" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                  </div>
                  <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">NIS</label>
                    <input type="name" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Level</label>
                  <select class="form-select" name="level" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="peminjam">Peminjam</optiion>
            
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
              <p class="mt-1">Saya Sudah Memiliki Akun. Login <a href="index.php"class="btn btn-warning">Disini</a></p>
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