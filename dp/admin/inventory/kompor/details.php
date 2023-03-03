<?php
session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$id = $_GET["id"];

$barang = query("SELECT * FROM barang WHERE id = $id");
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

    <title>Detail Barang</title>
</head>

<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Kembali ke Kompor</a>
        </li>
    </ul>




    <h4 class="ml-3">Detail Barang</h4>
    <div class="table-responsive">
        <table class="table table-bordered ml-3">
            <thead class="thead-light sticky-top">
                <tr>
                    <th scope="col">Id Barang</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Kategori Asset</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Qty</th>
                    <th scope="col">SO</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Dibuat Pada</th>
                    <th scope="col">Perubahan Terakhir</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Posisi Barang</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">SKU</th>
                </tr>
            </thead>
            <?php foreach ($barang as $brg) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $brg["id"]; ?></th>
                        <td><?= $brg["idOutlet"]; ?></td>
                        <td><?= $brg["kategori_asset"]; ?></td>
                        <td><?= $brg["nama_barang"]; ?></td>
                        <td><?= $brg["deskripsi"]; ?></td>
                        <td><img src="../../../img/<?= $brg["photo"]; ?>" alt="<?= $brg["photo"]; ?>" width="100"></td>
                        <td><?= $brg["satuan"]; ?></td>
                        <td><?= $brg["kategori"]; ?></td>
                        <td><?= number_format($brg["qty"], 0, 0, ".") ?></td>
                        <td><?= $brg["so"]; ?></td>
                        <td>Rp. <?= number_format($brg["harga"], 0, 0, ".") ?>,-</td>
                        <td><?= tgl_indo($brg["created_at"]); ?></td>
                        <td><?= tgl_indo($brg["updated_at"]); ?></td>
                        <td><?= $brg["pic"]; ?></td>
                        <td><?= $brg["posisi"]; ?></td>
                        <td><?= $brg["catatan"]; ?></td>
                        <td><?= $brg["sku"]; ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
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
</body>

</html>