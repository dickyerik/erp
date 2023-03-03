<?php
session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$id = $_GET["id"];

$brg = query("SELECT * FROM barang WHERE id = $id")[0];
$idbrg = $brg["id"];

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Maintenance History</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="container">
                    <div class="row">
                        <div class="nav">
                            <div class="nav-item">
                                <a class="nav-link" href="index.php">Kembali ke Kompor</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h1><?= $brg["nama_barang"]; ?></h1>
                <h1>ID : <?= $brg["id"]; ?></h1>

                <br>
                <div id="container">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light sticky-top">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <?php
                        $history = query("SELECT * FROM maintenancehistory WHERE id = $idbrg");
                        ?>
                        <?php $no = 1; ?>
                        <?php foreach ($history as $row) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= tgl_indo($row["tanggal"]); ?></td>
                                    <td><?= $row["deskripsi"]; ?></td>
                                </tr>
                            </tbody>
                            <?php $no++ ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>