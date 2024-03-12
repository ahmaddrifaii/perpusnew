<?php 
 
include '../../koneksi/koneksi.php';



$id = $_POST['idbuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
 
mysqli_query($koneksi, "UPDATE buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', 
	tahunterbit='$tahunterbit' where IDbuku='$id'");
 
header("location: ../buku.php");
?>