<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Peminjaman Buku Perpustakaan Digital</title>
 <link rel="stylesheet" href="../../bts/css/bootstrap.min.css">
    <script type="text/javascrpt" src="bts/css"></script>
  </head>
  <body>
   
   <div class="container">
    <div class="row">
        <div class="col text-center mt-3">
            <h3>LAPORAN DATA PEMINJAMAN BUKU</h3>
            <h3>APLIKASI PERPUSTAKAAN DIGITAL SMKN 5 KOTA BEKASI</h3>
            <span>Data ini merupakan data keseluruhan member perpustakan</span>
            </div>
            </div>
            <div class="row">
</div>
<div class="row">
    <table class="table my-2">
      <thead class="table  table-warning">
        <tr>
          <th scope="col">ID Peminjaman</th>
          <th scope="col">ID User</th>
          <th scope="col">ID Buku</th>
          <th scope="col">Nama Peminjam</th>
          <th scope="col">Tanggal Peminjaman</th>
          <th scope="col">Tanggal Pengembalian<th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <?php 
         include '../../koneksi/koneksi.php';

         $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
         while ($d = mysqli_fetch_array($data)) {
          
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
          <td><?php echo $d['IDuser'];?></td>
          <td><?php echo $d['IDbuku'];?></td>
          <td><?php echo $d['nama'];?></td>
          <td><?php echo $d['tgl_peminjaman'];?></td>
          <td><?php echo $d['tgl_pengembalian'];?></td>
          <td><?php echo $d['status_peminjaman'];?></td>
          
          
        </tr>
      </tbody>
      <?php
         }
      ?>
    </table>     
    <div class="col">
        <p style="line-height: 1rem; ">Mengetahui:</p>
        <p class="">Kepala Perpustakaan Sekolah</p>

        <p class="" style="margin-top: 4rem;"><b>Haji, S. pd</b></p>
    </div>
</div>
<div class="row">
    <a href="../laporan.php">Kembali</a>
</div>
</div>
<script>
    window.print();
</script>

  </body>
</html>