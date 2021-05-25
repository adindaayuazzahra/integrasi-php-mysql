<?php 
    include ('koneksi.php');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $query = $conn->query( "SELECT * FROM mahasiswa WHERE id = '$id'" ) ;
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:regular,italic,600,600italic,700,700italic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />

        <style>
            body{
                font-family: crimson text;
                background-image: linear-gradient(50deg,#0575E6,#021B79);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            .container{
                    margin-top:70px;
            }
        </style>
        <title>UNIVERSITAS | Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <?php while($mhs = mysqli_fetch_array($query)) : ?>
                <form action="proses_edit.php" method="POST">
                    <div class="card-header">FORM EDIT DATA MAHASISWA</div>
                    <input type="hidden" name="id" value="<?php echo $mhs['id']?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama" >Nama</label>
                            <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $mhs['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="npm" >NPM</label>
                            <input type="text" id="npm" class="form-control" name="npm" value="<?php echo $mhs['npm'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email" >E-Mail</label>
                            <input type="email" id="email" class="form-control" name="email" value="<?php echo $mhs['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="username" >Username</label>
                            <input type="text" id="username" class="form-control" name="username" autocomplete="off" value="<?php echo $mhs['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input type="text" id="password" class="form-control" name="password" autocomplete="off"placeholder="Masukkan Password Lama atau Password baru (bila ingin merubah)">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="index.php" type="button" class="btn btn-secondary">Back</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <?php endwhile; ?>
            </div>
        </div>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
        <script>
            bootstrapValidate('#nama','required:Field nama harus di isi!');
            bootstrapValidate('#email','email:Masukkan alamat E-mail yang valid!');
            bootstrapValidate('#npm','numeric:Masukkan NIM hanya dengan angka!');
            bootstrapValidate('#username','required:Field username harus di isi!');
            bootstrapValidate('#password','required:Field password harus di isi!');
        </script>
    </body>
</html>