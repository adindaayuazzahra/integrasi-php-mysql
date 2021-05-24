<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        <style>
            body {
                background-image: linear-gradient(50deg,#0575E6,#021B79);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }

            .container {
                margin-top: 120px;
            }

            .card-login {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.6);
            overflow: hidden;
            }

            .card-login .card-title {
            margin-bottom: 2rem;
            font-weight: 400;
            font-size: 30px;
            }

            .card-login .card-img {
            width: 45%;
            /* background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512'); */
            background: scroll center url('https://source.unsplash.com/ute2XAFQU2I/414x512');
            background-size: cover;
            }

            .card-login .card-body {
            padding: 2rem;
            height: 500px;
            }

            .form-control {
                border-radius: 5rem;
                height: 50px;
            }

        </style>
        <title>UNIVERSITAS | Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-login flex-row">
                        <div class="card-img d-none d-md-flex">
                            <!-- bacground ada di css -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="cookie.php" method="POST">
                                <div class="form-group">
                                    <input type="text" id="inputUserame" class="form-control" placeholder="Username" name="username" autocomplete="off" required autofocus>
                                </div>

                                <div class="form-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                                </div>

                                <div class="form-check my-3 ml-1">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    <label class="form-check-label">
                                    Remember me
                                    </label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">LOGIN</button>
                            </form>
                            <?php if(isset($_SESSION['status'])): ?>
                                <div class="alert alert-danger alert-dismissible mt-3">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <?php echo $_SESSION['status']; ?> <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <?php unset($_SESSION['status']); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>