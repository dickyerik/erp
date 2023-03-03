<?php

session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login.php");
    exit;
}

$id = $_GET["id"];
$brg = query("SELECT * FROM barang where id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
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

$date = date('Y-m-d');

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

    <title>Ubah Data Barang</title>
</head>

<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Kembali ke Master Barang</a>
    </li>
</ul>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ubah Data Barang</h2>
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $brg["id"]; ?>">
                <input type="hidden" name="photoLama" value="<?= $brg["photo"]; ?>">
                <div class="form-group">
                    <label for="idOutlet">Outlet</label>
                    <select class="form-control" name="idOutlet" type="text" id="idOutlet" autofocus required>
                        <option value="<?= $brg["idOutlet"]; ?>" hidden><?= $brg["idOutlet"]; ?></option>
                        <?php $outlet = mysqli_query($conn, "SELECT * FROM outlet"); ?>
                        <?php foreach ($outlet as $otl) : ?>
                            <option value="<?= $otl["kodeOutlet"]; ?>"><?= $otl["namaOutlet"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <input type="text" name="kategori_asset" hidden value="FA">

                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input value="<?= $brg["nama_barang"]; ?>" type="text" name="nama_barang" class="form-control" id="barang" autofocus required minlength="3">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input value="<?= $brg["deskripsi"]; ?>" type="text" name="deskripsi" class="form-control" id="deskripsi" required>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label><br>
                    <img src="../../img/<?= $brg['photo']; ?>" style="width: 150px"> <br><br>
                    <input type="file" name="photo" id="photo">
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <select name="satuan" id="satuan" class="form-control" required>
                        <option value="<?= $brg["satuan"]; ?>" hidden><?= $brg["satuan"]; ?></option>
                        <option value="Pcs">Pcs</option>
                        <option value="Unit">Unit</option>
                        <option value="Pack">Pack</option>
                        <option value="Kompan">Kompan</option>
                        <option value="Kg">Kg</option>
                        <option value="Set">Set</option>
                        <option value="Lembar">Lembar</option>
                        <option value="Roll">Roll</option>
                        <option value="Pasang">Pasang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="<?= $brg["kategori"]; ?>" hidden><?= $brg["kategori"]; ?></option>
                        <option value="Serving Utensils">Serving Utensils</option>
                        <option value="Dinnerware">Dinnerware</option>
                        <option value="Kursi Meja">Kursi Meja</option>
                        <option value="Kompor">Kompor</option>
                        <option value="Bar">Bar</option>
                        <option value="Elektronik dan lainnya">Elektronik dan lainnya</option>
                        <option value="LF Stuff">LF Stuff</option>
                        <option value="Take Away">Take Away</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <input type="hidden" name="qty" value="<?= $brg["qty"]; ?>">
                <div class="form-group">
                    <label for="so">SO</label>
                    <select name="so" id="so" class="form-control" required>
                        <option value="<?= $brg["so"]; ?>" hidden><?= $brg["so"]; ?></option>
                        <option value="General Affair">General Affair</option>
                        <option value="Service">Service</option>
                        <option value="Bar">Bar</option>
                        <option value="Kitchen">Kitchen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input value="<?= $brg["harga"]; ?>" type="number" name="harga" class="form-control" id="harga" min="0" max="9999999">
                </div>
                <input type="date" name="created_at" class="form-control" id="created_at" hidden value="<?= $brg["created_at"]; ?>">
                <input type="date" name="updated_at" class="form-control" id="updated_at" hidden value="<?= $date; ?>">
                <input type="text" name="pic" hidden value="<?= $username; ?>">
                <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <select name="posisi" id="posisi" class="form-control" required>
                        <option value="<?= $brg["posisi"]; ?>" hidden><?= $brg["posisi"]; ?></option>
                        <option value="All Area">All Area</option>
                        <option value="Kitchen L1">Kitchen L1</option>
                        <option value="Kitchen L2">Kitchen L2</option>
                        <option value="Gudang GA">Gudang GA</option>
                        <option value="Gudang Purchasing">Gudang Purchasing</option>
                        <option value="Admin Room">Admin Room</option>
                        <option value="Area Bar">Area Bar</option>
                        <option value="Area L2 Kanan">Area L2 Kanan</option>
                        <option value="Area L2 Utama">Area L2 Utama</option>
                        <option value="M3">M3</option>
                        <option value="Area Es Campur">Area Es Campur</option>
                        <option value="Area L3 Kanan">Area L3 Kanan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <input value="<?= $brg["catatan"]; ?>" type="text" name="catatan" class="form-control" id="catatan" required>
                </div>
                <input type="text" hidden name="sku">
                <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
            </form>
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
</body>

</html>