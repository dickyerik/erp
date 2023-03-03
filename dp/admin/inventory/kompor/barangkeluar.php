<?php
session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$id = $_GET["id"];

$brg = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (tambahbarangkeluar($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
			";
    } else {
        echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
			";
    }
}

$username = $_SESSION["username"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS Saya-->
    <link rel="stylesheet" href="../style.css">

    <title>Barang Keluar</title>
</head>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Kembali ke Kompor</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h3><?= $brg["nama_barang"]; ?></h3>
            <hr>
            <h4>Barang Keluar</h4>
            <form action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $brg["id"]; ?>">
                <div class="form-group">
                    <label for="tanggal_keluar">Tanggal :</label>
                    <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" required autofocus>
                </div>
                <div class="form-group">
                    <label for="qty_keluar">Qty :</label>
                    <input type="number" name="qty_keluar" class="form-control" id="qty_keluar" required>
                </div>
                <div class="form-group">
                    <label for="keterangan_keluar">Keterangan :</label>
                    <input type="text" name="keterangan_keluar" class="form-control" id="keterangan_keluar" required>
                </div>
                <input type="text" name="pic" hidden value="<?= $username; ?>">
                <button class="btn btn-primary mt-3" type="submit" name="submit">Submit!</button>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    -->
</body>

</html>