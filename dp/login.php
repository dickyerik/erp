<?php
session_start();

require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $result = mysqli_query($conn, "SELECT * FROM multiuser WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        $role = $row["role"];
        if (password_verify($password, $row["password"])) {
            var_dump($row);
            // set session
            if ($role == '') {
                echo "
                    <script>
                        alert('Maaf akun anda belum diverifikasi, silahkan hubungi admin untuk verifikasi!');
                        document.location.href = 'login.php';
                    </script>   
                ";
            } elseif ($role == 'admin') {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;

                header("Location:admin/index.php");
            } elseif ($role == 'user') {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;

                header("Location:user/index.php");
            }
        }
    }
    $error = true;
}

?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="stylesheet.css">

    <title>Login</title>
</head>

<body class="loginpage">
    <div class="container">
        <div class="signin">
            <img class="logo" src="img/delapanpadilogo.png" alt="">
            <h2 class="erp">Enterprise Resource Planning</h2>
            <h5 class="judul">Sign In</h5>
            <?php if (isset($error)) : ?>
                <p class="parag">username / password salah!</p>
            <?php endif; ?>
            <form class="formlogin" action="" method="post" autocomplete="off">
                <p class="parag">with :</p>
                <div class="social">
                    <a class="ikon" href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a class="ikon" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="ikon" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="parag">Or enter information</p>
                <input class="inputlogin" autocomplete="off" required type="text" name="username" id="username" autofocus placeholder="username">
                <input class="inputlogin" autocomplete="off" required type="password" name="password" id="password" placeholder="password">
                <input class="inputlogin" type="submit" name="login" value="Login">
            </form>
        </div>
    </div>
</body>

</html>