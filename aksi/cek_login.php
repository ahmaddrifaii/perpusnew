<?php 

session_start();
 

include '../koneksi/koneksi.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 
 

$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
 

if($cek > 0){
 
  $data = mysqli_fetch_assoc($login);
 

  if($data['level']=="admin"){
 

    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    header("location:../admin/index_adm.php");
 

  }else if($data['level']=="petugas"){

    $_SESSION['username'] = $username;
    $_SESSION['level'] = "petugas";
   
    header("location:../petugas/index_ptg.php");
 

  }else if($data['level']=="peminjam"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "peminjam";
    // alihkan ke halaman dashboard pengurus
    header("location:../peminjam/index_pmj.php");
 
  }else{
 
    // alihkan ke halaman login kembali
    header("location:../index.php?pesan=gagal");
  } 
}else{
  header("location:../index.php?pesan=gagal");
}
 
?>