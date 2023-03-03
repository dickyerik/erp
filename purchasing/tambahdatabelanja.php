<?php

date_default_timezone_set("Asia/Jakarta");

session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../login.php");
    exit;
}

$barang = query("SELECT MAX(invoiceId) AS invoiceId FROM daftarbelanja");

if (isset($_POST['cari'])) {
    $barang = cari($_POST['keyword']);
}


$username = $_SESSION["username"];

$d = date('Y-m-d h:m:s');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>Tambah Data Belanja</title>
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
        <div class="kartu">
            <h2>Tambah Data Belanja</h2>

            <?php foreach ($barang as $brg) : ?>
                <?php $invId = $brg["invoiceId"] + 1; ?>
            <?php endforeach; ?>


            <p>Invoice Id : <?= $invId; ?></p>

            <p>Tanggal : <?= $d; ?></p>

            <p><label for="clientId">Nama Perusahaan :</label>
                <select name="clientId" id="ClientId" required>
                    <option hidden value="">--silahkan pilih--</option>
                    <?php $client = query("SELECT * FROM client"); ?>
                    <?php foreach ($client as $cl) : ?>
                        <option value="<?= $cl['clientId']; ?>"><?= $cl['namaPerusahaan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </p>

            <?php $clnt = $cl['clientId']; ?>

            <form action="action.php" method="post">
                <div class="formDalam">
                    <div class="apsection">
                        <table>
                            <tr>
                                <input type="text" hidden name="invoiceId[]" id="invoiceId" value="<?= $invId; ?>" required>
                                <input type="text" hidden name="createdDate[]" id="createdDate" value="<?= $d; ?>" required>
                                <input type="text" hidden name="clientId[]" id="clientId" value="<?= $clnt; ?>" required>

                                <td>
                                    <select name="assetId[]" id="assetId" required>
                                        <option hidden value="">--pilih nama item--</option>
                                        <?php $master = query("SELECT * FROM masterasset"); ?>
                                        <?php foreach ($master as $ma) : ?>
                                            <option value="<?= $ma['assetId']; ?>"><?= $ma['namaAsset']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input placeholder="quantity" type="number" name="qty[]" id="qty" min="1" required>
                                </td>
                                <td>
                                    <input placeholder="harga" type="number" name="harga[]" id="harga" min="1" required>
                                </td>


                                <input type="text" hidden name="pic[]" id="pic" value="<?= $username; ?>" required>


                            </tr>
                        </table>
                    </div>

                    <button id="btn">Tambah Baris!</button>
                    <button id="rmv">Hapus Baris!</button>
                </div>
                <button type="submit" name="submit" id="submit">Tambah Data!</button>



            </form>


        </div>
    </div>
    <script>
        $('document').ready(function() {
            $('#btn').click(function(e) {
                e.preventDefault();
                $('.apsection').append('<table><tr><input type="text" hidden name="invoiceId[]" id="invoiceId" value="<?= $invId; ?>" required><input type="text" hidden name="createdDate[]" id="createdDate" value="<?= $d; ?>" required><input type="text" hidden name="clientId[]" id="clientId" value="<?= $clnt; ?>" required><td><select name="assetId[]" id="assetId" required><option hidden value="">--pilih nama item--</option><?php $master = query("SELECT * FROM masterasset"); ?><?php foreach ($master as $ma) : ?><option value="<?= $ma['assetId']; ?>"><?= $ma['namaAsset']; ?></option><?php endforeach; ?></select></td><td><input placeholder="quantity" type="number" name="qty[]" min="1" id="qty" required></td><td><input placeholder="harga" type="number" name="harga[]" min="1" id="harga" required></td><input type="text" hidden name="pic[]" id="pic" value="<?= $username; ?>" required></tr></table>');
            });
        });
        $('document').ready(function() {
            $('#rmv').click(function(e) {
                e.preventDefault();
                $('table:last').remove();
            });
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>