<?php

session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../login.php");
    exit;
}



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

    <title>Purchase System</title>
</head>

<body>
    <div class="header">
        <h1>Purchase System</h1>
        <h3><?= $username; ?></h3>
        <div class="nav">
            <a class="nav-item" href="../logout.php">Logout</a>
        </div>
        <div class="nav">
            <a class="nav-item" href="../homepage.php">kembali ke Homepage</a>
        </div>
    </div>

    <div class="menu">
        <a href="index.php">10 Transaksi Terakhir</a>
        <a href="client.php">Client / Vendor</a>
        <a href="daftarbelanja.php">Daftar Belanja</a>
        <a href="tambahdatabelanja.php">Tambah Data Belanja</a>
        <a href=""></a>
    </div>

    <div class="main">
        <h2>10 Transaksi Terakhir berdasarkan invoice</h2>
        <form action="" method="post">
            <label for="">Invoice Id :</label>
            <input type="number" name="invoId">
        </form>
        <button type="submit">Cari!</button>

        <?php $barang = query("SELECT createdDate, harga, qty, pic, client.namaPerusahaan, masterasset.namaAsset FROM daftarbelanja INNER JOIN client ON client.clientId = daftarbelanja.clientId INNER JOIN masterasset ON masterasset.assetId = daftarbelanja.assetId WHERE invoiceId = $invoId");; ?>


        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($barang as $brg) : ?>
                <tbody>
                    <tr>
                        <th><?= $no; ?></th>
                        <td><?= $brg["namaAsset"]; ?></td>
                        <td><?= $brg["qty"]; ?></td>
                        <td><?= $brg["harga"]; ?></td>

                    </tr>
                </tbody>
                <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="js/scriptbarang.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>