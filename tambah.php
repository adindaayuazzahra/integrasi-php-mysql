<?php 
include ('koneksi.php');
session_start();


if(isset($_POST["submit"])){

    $nama = $_POST["nama"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];
    $username = strtolower(stripslashes($_POST["username"]));

    $cekusername = "SELECT username FROM mahasiswa WHERE username = '$username' ";
    $hasil = mysqli_query($conn,$cekusername);

    if (mysqli_num_rows($hasil)>0) {
        $_SESSION['status'] = "Data Gagal Dimasukkan, Username sudah Dafatarkan Sebelumnya!";
        header('Location: index.php');

    } else {
        $password = sha1($_POST["password"]);
    
        $query = "INSERT INTO mahasiswa (nama, npm, email, username, password) VALUE ('$nama', '$npm', '$email', '$username', '$password')";
        $result = mysqli_query($conn,$query);

        if($result) {
            $_SESSION['status'] = "Data Berhasil Di Masukkan!";
            header('Location: index.php');

        } else {
            $_SESSION['status'] = "Data Gagal Di Masukkan!";
            header('Location: index.php');
        }
    }
    
} else {
    die("Akses dilarang...");
}

?>
