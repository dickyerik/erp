<?php

session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$barang = query("SELECT * FROM barang WHERE kategori = 'Elektronik dan lainnya'");


if (isset($_POST['cari'])) {
    $barang = cari($_POST['keyword']);
}

$username = $_SESSION["username"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS Saya-->
    <link rel="stylesheet" href="../style.css">

    <title>Elektronik dan lainnya</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="container">
                    <div class="row">
                        <div class="nav">
                            <div class="nav-item">
                                <a class="nav-link" href="../index.php">Kembali ke Master Barang</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="tambahbarang.php">Tambah Barang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="container">
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline" action="" method="post">
                                    <input class="form-control mr-sm-2" size="35" autofocus id="keyword" type="text" name="keyword" autocomplete="off" placeholder="Masukkan keyword pencarian..." aria-label="Search">
                                    <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari" hidden>Cari!</button>
                                </form>
                            </nav>
                        </div>
                        <div class="container ml-3">
                            <h4>Elektronik dan lainnya</h4>
                        </div>
                    </div>
                </div>

                <div id="container">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light sticky-top">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Update Qty</th>
                                <th scope="col">Maintenance History</th>
                                <th scope="col">SKU</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($barang as $brg) : ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <th scope="row">
                                        <a href="details.php?id=<?= $brg["id"]; ?>">Details</a>
                                        <hr>
                                        <a href="ubah.php?id=<?= $brg["id"]; ?>">Ubah</a>
                                    </th>
                                    <td><?= $brg["nama_barang"]; ?></td>
                                    <td><img src="../../../img/<?= $brg["photo"]; ?>" width="100px" alt="no-photo"></td>
                                    <td><?= number_format($brg["qty"], 0, 0, ".") ?></td>
                                    <td><?= $brg["satuan"]; ?></td>
                                    <th scope="row">
                                        <a href="barangmasuk.php?id=<?= $brg["id"]; ?>">Barang Masuk</a>
                                        <hr>
                                        <a href="history.php?id=<?= $brg["id"]; ?>">History</a>
                                        <hr>
                                        <a href="barangkeluar.php?id=<?= $brg["id"]; ?>">Barang Keluar</a>
                                    </th>
                                    <th>
                                        <a href="maintenancehistory.php?id=<?= $brg["id"]; ?>">Maintenance History</a>
                                        <hr>
                                        <a href="tambahmaintenancehistory.php?id=<?= $brg["id"]; ?>">Tambah Data Maintenance</a>
                                    </th>
                                    <td><?= $brg["sku"]; ?></td>
                                </tr>
                            </tbody>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <script src="../js/scriptlf.js"></script>
</body>

</html>