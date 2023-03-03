<?php

session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="../stylesheet.css">

    <title>Home | DP ERP</title>
</head>

<body class="indexadmin">

    <!-- ASIDE START -->
    <div class="kontener">
        <aside>
            <div class="top">
                <div class="logodp">
                    <img src="../img/delapanpadilogo.png" />
                    <h2>Delapan Padi</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php" class="active">
                    <h3>Home</h3>
                </a>
                <a href="#">
                    <h3>Inventory Management</h3>
                </a>
                <a href="inventory/">
                    <h4>Master Barang</h4>
                </a>
                <!-- <a href="#">
                    <h3>Human Resource Departement</h3>
                </a>
                <a href="humanresources/datakaryawan/index.php">
                    <h4>Data Karyawan</h4>
                </a>
                <a href="absensi.php">
                    <h4>Absensi</h4>
                </a>
                <a href="rules/index.php">
                    <h4>Peraturan Perusahaan</h4>
                </a> -->
                <a class="nav-link" href="../network/network.php">
                    <h3>Network</h3>
                </a>
                <a class="nav-link" href="../fingerspot/fingerspot.php">
                    <h3>Fingerspot Personnel</h3>
                </a>
                <!-- <a class="nav-link" href="buildingmaintenance/index.php">
                    <h3>Building Maintenance</h3>
                </a> -->
                <!-- <a class="nav-link" href="esa/index.php">
                    <h3>Earned Salary Access</h3>
                </a> -->
                <a href="../logout.php">
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
    </div>
    <script src="../sript.js"></script>
</body>

</html>