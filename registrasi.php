<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script> 
				alert('user baru berhasil ditambahkan! Hubungi admin untuk verifikasi!');
				document.location.href='login.php';
			  </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Halaman Registrasi</title>
</head>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="row justify-content-center">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Halaman Registrasi</h1>
                                        </div>
                                        <br><br>
                                        <form class="user" action="" method="post" autocomplete="off">
                                            <div class="mb-3">
                                                <input required class="form-control form-control-user" type="text" name="username" id="username" autofocus placeholder="Masukkan username">
                                            </div>
                                            <div class="mb-3">
                                                <input required class="form-control form-control-user" type="password" name="password" id="password" placeholder="Masukkan Password">
                                            </div>
                                            <div class="mb-3">
                                                <input required class="form-control form-control-user" type="password" name="password2" id="password2" placeholder="Masukkan Konfirmasi Password">
                                            </div>
                                            <input hidden type="text" name="role" id="role" value="">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-info" type="submit" name="register">Register!</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
</body>

</html>