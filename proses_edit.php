<?php 
include ('koneksi.php');
session_start();


if(isset($_POST["submit"])){

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];
    $username = strtolower(stripslashes($_POST["username"]));
    $password = sha1($_POST["password"]);

    $query = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', email = '$email', username = '$username', password = '$password'  WHERE id = '$id'";
    $result = mysqli_query($conn,$query);

    if($result) {
        $_SESSION['status'] = "Data Berhasil Di Update!";
        header('Location: index.php');

    } else {
        $_SESSION['status'] = "Data Gagal Di Update!";
        header('Location: index.php');
    }
    
} else {
    die("Akses dilarang...");
}

?>
