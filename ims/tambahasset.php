<?php

session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../login.php");
    exit;
}

$barang = query("SELECT * FROM masterasset");

if (isset($_POST['cari'])) {
    $barang = cari($_POST['keyword']);
}


$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">

    <title>IMS</title>
</head>

<body>
    <div class="header">
        <h1>Inventory Management System</h1>
        <h3><?= $username; ?></h3>
        <div class="nav">
            <a class="nav-item" href="../logout.php">Logout</a>
        </div>
        <div class="nav">
            <a class="nav-item" href="../homepage.php">kembali ke Homepage</a>
        </div>
    </div>

    <div class="menu">
        <a href="index.php">Master Asset</a>
        <a href="tambahasset.php">Tambah Asset Baru</a>
        <!-- <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a> -->
    </div>

    <div class="main">
        <h2>Tambah Asset Baru</h2>
    </div>
    <script src="js/scriptbarang.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>