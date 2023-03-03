<?php
session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET["id"];

$brg = query("SELECT * FROM barang WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    if (tambahmaintenancehistory($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'mesinpendingin.php';
			</script>
			";
    } else {
        echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'mesinpendingin.php';
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
    <title>Maintenance History</title>
</head>

<body>
    <h3><?= $brg["barang"]; ?></h3>
    <h3>ID : <?= $brg["id"]; ?></h3>

    <a href="mesinpendingin.php">Kembali!</a>

    <br><br>

    <form action="" method="post">
        <ul>
            <input type="text" name="id" value="<?= $brg["id"]; ?>" hidden>
            <li>
                <label for="tanggal">Tanggal :</label>
                <input type="date" name="tanggal" id="tanggal" required>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>

            <input type="text" name="pic" hidden value="<?= $username; ?>">

            <br>

            <button name="submit" type="submit">Tambah Data!</button>
        </ul>
    </form>
</body>

</html>