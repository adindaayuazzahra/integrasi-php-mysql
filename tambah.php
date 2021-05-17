<?php 
include ('koneksi.php');
session_start();


if(isset($_POST["submit"])){

    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];
    
    $query = "INSERT INTO mahasiswa (nama, npm, email) VALUE ('$nama', '$npm', '$email')";
    $result = mysqli_query($conn,$query);

    if($result) {
        $_SESSION['status'] = "Data Berhasil Di Masukkan!";
        header('Location: index.php');

    } else {
        $_SESSION['status'] = "Data Gagal Di Masukkan!";
        header('Location: index.php');
    }

} else {
    die("Akses dilarang...");
}

?>
