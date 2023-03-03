<?php

session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Homepage | ERP</title>
</head>

<body>
    <div class="header">
        <h1>Homepage | ERP</h1>
        <h3>Welcome, <?= $username; ?>!</h3>
        <div class="nav">
            <a class="nav-item" href="logout.php">Logout</a>
        </div>
    </div>

    <div class="menu">
        <a href="ims/index.php">IMS Back Office</a>
        <a href="imsfo/index.php">IMS Front Office</a>
        <a href="">Point of Sales</a>
        <a href="">Human Resources Department</a>
        <a href="">Financial Accounting</a>
        <a href="purchasing/index.php">Purchasing</a>
        <a href="">Users</a>
    </div>

    <div class="main">

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>