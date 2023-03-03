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

                header("Location:homepage.php");
            } elseif ($role == 'user') {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;

                header("Location:homepage.php");
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

    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="box">
            <h2 class="erp">Enterprise Resource Planning</h2>
            <?php if (isset($error)) : ?>
                <p class="parag">username / password salah!</p>
            <?php endif; ?>
            <form class="formlogin" action="" method="post" autocomplete="off">
                <h3 class="judul">Sign In</h3>
                <ul>
                    <li>
                        <input class="inputlogin mt-3" autocomplete="off" required type="text" name="username" id="username" autofocus placeholder="username">
                    </li>
                    <li>
                        <input class="inputlogin" autocomplete="off" required type="password" name="password" id="password" placeholder="password">
                    </li>
                    <li>
                        <button name="login">Login</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>