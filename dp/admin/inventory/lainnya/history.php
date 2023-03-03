<?php

session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$id = $_GET["id"];

$barang = query("SELECT * FROM barangmasuk WHERE id = $id");

$barang2 = query("SELECT * FROM barangkeluar WHERE id = $id");

$nama = mysqli_query($conn, "SELECT * FROM barang WHERE id = $id");

$nm = mysqli_fetch_assoc($nama);
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS Saya-->
    <link rel="stylesheet" href="../style.css">

    <title>Histori Keluar/Masuk Barang</title>
</head>

<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Kembali ke Master Barang</a>
        </li>
    </ul>
    <h2 class="ml-3"><?= $nm["nama_barang"] ?></h2>
    <hr>

    <h4 class="ml-3">Barang Masuk</h4>
    <table class="table table-bordered ml-3">
        <thead class="thead-light sticky-top">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Qty</th>
                <th scope="col">Keterangan</th>
                <th scope="col">PIC</th>
            </tr>
        </thead>

        <?php
        $nama = mysqli_query($conn, "SELECT * FROM barang WHERE id = $id");
        $nm = mysqli_fetch_assoc($nama);
        ?>

        <?php $no = 1 ?>
        <?php foreach ($barang as $row) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= tgl_indo($row["tanggal_masuk"]); ?></td>
                    <td><?= number_format($row["qty_masuk"], 0, 0, ".") ?></td>
                    <td><?= $row["keterangan_masuk"] ?></td>
                    <td><?= $row["pic"] ?></td>
                </tr>
            </tbody>
            <?php $no++ ?>
        <?php endforeach; ?>
    </table>

    <hr>

    <h4 class="ml-3">Barang Keluar</h4>
    <table class="table table-bordered ml-3">
        <thead class="thead-light sticky-top">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">Qty</th>
                <th scope="col">Keterangan</th>
                <th scope="col">PIC</th>
            </tr>
        </thead>
        <?php
        $nama = mysqli_query($conn, "SELECT * FROM barang WHERE id = $id");
        $nm = mysqli_fetch_assoc($nama);
        ?>
        <?php $no = 1 ?>
        <?php foreach ($barang2 as $row) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no; ?></td>
                    <td><?= tgl_indo($row["tanggal_keluar"]); ?></td>
                    <td><?= number_format($row["qty_keluar"], 0, 0, ".") ?></td>
                    <td><?= $row["keterangan_keluar"] ?></td>
                    <td><?= $row["pic"] ?></td>
                </tr>
            </tbody>
            <?php $no++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>