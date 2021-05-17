<?php
include ('koneksi.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $query = "DELETE FROM mahasiswa WHERE id = '$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
     $_SESSION['status'] = "Data Berhasil Di Hapus!";
     header('Location: index.php');
    } else {
      $_SESSION['status'] = "Data Gagal Di Hapus!";
      header('Location: index.php');
    }
  } else {
    header('Location:index.php');
}
?>