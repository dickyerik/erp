<?php
require '../functions.php';

$id = $_GET["id"];

$karyawan = query("SELECT * FROM karyawan WHERE id_kry = $id")[0];

if (isset($_POST["submit"])) {
	if (ubahkaryawan($_POST) > 0) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
				document.location.href = 'index.php';
			</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data</title>
</head>

<body>
	<h2>Ubah Data</h2>

	<a href="index.php">Kembali</a>

	<form action="" method="post">
		<ul>
			<input type="hidden" name="id_kry" value="<?= $karyawan["id_kry"]; ?>">
			<li>
				<label for="nama">Nama Karyawan :</label>
				<input type="text" name="nama" id="nama" value="<?= $karyawan["nama"]; ?>" required>
			</li>
			<li>
				<label for="nik">Nik :</label>
				<input type="text" name="nik" id="nik" value="<?= $karyawan["nik"]; ?>" required>
			</li>
			<li>
				<label for="kota_lahir">Kota Lahir :</label>
				<input type="text" name="kota_lahir" id="kota_lahir" value="<?= $karyawan["kota_lahir"]; ?>" required>
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir :</label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $karyawan["tanggal_lahir"]; ?>" required>
			</li>
			<li>
				<label for="first_join">Tanggal Gabung :</label>
				<input type="text" name="first_join" id="first_join" value="<?= $karyawan["first_join"]; ?>" required>
			</li>
			<li>
				<label for="keterangan">Keterangan :</label>
				<input type="text" name="keterangan" id="keterangan" value="<?= $karyawan["keterangan"] ?>" required>
			</li>

			<br>

			<button type="submit" name="submit">Ubah Data!</button>

		</ul>
	</form>
</body>

<a href="index.php">Kembali</a>

</html>