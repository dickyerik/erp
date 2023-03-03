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
    if (tambahmaintenancehistory($_POST) > 0) {
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
			</script>";
    }
}

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
                                <a class="nav-link" href="index.php">Kembali ke Elektronik dan lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="col">
                    <div class="container">
                        <div class="nav">
                            <div class="nav-item">
                                <h3><?= $brg["nama_barang"]; ?></h3>
                                <h3>ID : <?= $brg["id"]; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

                        <input type="text" name="id" value="<?= $brg["id"]; ?>" hidden>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" id="tanggal" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" type="text" required cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input class="form-control" name="harga" id="harga" type="number" min="0" max="9999999" required>
                        </div>
                        <input type="text" name="pic" hidden value="<?= $username; ?>">

                        <button name="submit" class="btn btn-primary mt-3" type="submit">Tambah Data!</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>