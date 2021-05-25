<?php
	include ('koneksi.php');
	
	session_start();

    if (isset($_POST["submit"])) {

        $username=$_POST['username'];
        $password=sha1($_POST['password']);

        $query = "SELECT * FROM mahasiswa WHERE username = '$username'";
        $result = mysqli_query($conn,$query);
        
        if (mysqli_num_rows($result) > 0 ){
            $query = "SELECT * FROM mahasiswa WHERE password = '$password'";
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result) > 0 ) {
                $_SESSION['user']=true;
                if (isset($_POST['remember'])){
                    //set cookie
                    setcookie('user',$username, time() + (2*60));
                }
                header("Location: index.php");
            } else{
                $_SESSION['status'] = "Username atau Password salah";
                header("Location: loginpage.php");
            }   
        } else{
            $_SESSION['status'] = "Username atau Password salah";
            header("Location: loginpage.php");
        }
    }
	elseif(!empty($_POST['logout'])) {
		setcookie('user',$username, time() - (2*60));
		session_unset();
		session_destroy();
		header("Location: loginpage.php");
	}
?>