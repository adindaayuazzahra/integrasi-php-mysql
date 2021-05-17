<?php 
    include ('koneksi.php');
    $query = mysqli_query($conn,"SELECT * FROM mahasiswa");
    session_start();  
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
        .jumbotron {
            
                background-image: linear-gradient(60deg,#0575E6,#021B79);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;   
        }

        body{
            font-family: crimson text;
        }

        p{
            font-family: work sans;
        }
    </style>

    <title>UNIVERSITAS | Mahasiswa</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center text-white">
            <h1 class="display-4">DAFTAR MAHASISWA</h1>
            <p class="lead">Adinda Ayu Azzahra - 4519210056 | Tugas Matakuliah Pemrograman Berbasis Web Kelas-A</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php if(isset($_SESSION['status'])): ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <?php echo $_SESSION['status']; ?>
                    </div>
                    <?php unset($_SESSION['status']); ?>
                <?php endif; ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-user-plus"></i> Tambah Mahasiswa Baru
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" >Form Tambah Mahasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="tambah.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label >NPM</label>
                                        <input type="text" id="npm" class="form-control" name="npm" placeholder="Masukkan NPM">
                                    </div>
                                    <div class="form-group">
                                        <label >E-Mail</label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <?php while($mhs = mysqli_fetch_array($query)) : ?>
                    <ul class="list-group  list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="my-4">
                                <p class="h1"><?php echo $mhs["nama"]; ?></p>
                                <span>
                                    <i class="far fa-id-card"> <?php echo $mhs["npm"]; ?></i> <br> 
                                    <i class="far fa-envelope-open"> <?php echo $mhs["email"]; ?></i>
                                </span>
                            </div>
                            
                            <a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger" ><i class="far fa-trash-alt"></i> HAPUS</a>
                            
                        </li>
                    </ul>
                <?php endwhile ?>
            </div>
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
    </script>
  </body>
</html>