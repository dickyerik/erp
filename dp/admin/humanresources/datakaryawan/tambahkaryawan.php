<?php

session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
	header("Location: ../login.php");
	exit;
}

if (isset($_POST["submit"])) {
	if (tambahkaryawan($_POST) > 0) {
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
				document.location.href = 'tambahkaryawan.php';
			</script>
			";
	}
}

$date = date('Y-m-d');

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Karyawan</title>
</head>

<body>
	<h2>Tambah Karyawan</h2>

	<a href="index.php">Data Karyawan</a>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama lengkap :</label>
				<input type="text" name="nama" id="nama" required autofocus>
			</li>
			<li>
				<label for="id_karyawan">ID Karyawan :</label>
				<input type="text" name="id_karyawan" id="id_karyawan" required autofocus>
			</li>
			<li>
				<label for="kategori">Kategori :</label>
				<select name="kategori" id="kategori" required>
					<option value="" hidden>--Pilih Kategori--</option>
					<option value="Head">Head</option>
					<option value="Service dan Bar">Service dan Bar</option>
					<option value="Kitchen">Kitchen</option>
					<option value="The Little Flavor">The Little Flavor</option>
					<option value="First Crack">First Crack</option>
					<option value="Sucre">Sucre</option>
				</select>
			</li>
			<li>
				<label for="divisi">Divisi :</label>
				<select name="divisi" id="divisi" required>
					<option value="" hidden>--Pilih Divisi--</option>
					<option value="Service">Service</option>
					<option value="Bar">Bar</option>
					<option value="Kitchen">Kitchen</option>
					<option value="Office">Office</option>
				</select>
			</li>
			<li>
				<label for="jabatan">Jabatan Karyawan :</label>
				<select name="jabatan" id="jabatan" required>
					<option value="" hidden>--Pilih Jabatan--</option>
					<option value="Restaurant Manager">Restaurant Manager</option>
					<option value="Head Chef">Head Chef</option>
					<option value="Sous Chef">Sous Chef</option>
					<option value="Admin">Admin</option>
					<option value="Human Resources">Human Resources</option>
					<option value="Sales and Marketing">Sales and Marketing</option>
					<option value="General Affair">General Affair</option>
					<option value="Supervisor">Supervisor</option>
					<option value="Chef de Party">Chef de Party</option>
					<option value="Senior Captain">Senior Captain</option>
					<option value="Captain">Captain</option>
					<option value="Senior Cashier">Senior Cashier</option>
					<option value="Cashier">Cashier</option>
					<option value="Senior Server">Senior Server</option>
					<option value="Server">Server</option>
					<option value="Runner">Runner</option>
					<option value="Senior Public Area">Senior Public Area</option>
					<option value="Public Area">Public Area</option>
					<option value="Senior Cook">Senior Cook</option>
					<option value="Cook">Cook</option>
					<option value="Cook Helper">Cook Helper</option>
					<option value="Dishwasher">Dishwasher</option>
					<option value="Auditor">Auditor</option>
					<option value="Purchaser">Purchaser</option>
					<option value="Head Bar">Head Bar</option>
					<option value="Senior Bar">Senior Bar</option>
					<option value="Bar">Bar</option>
					<option value="Sucre Staff">Sucre Staff</option>
					<option value="The Little Flavor Business and Operation">The Little Flavor Business and Operation</option>
					<option value="The Little Flavor Crew">The Little Flavor Crew</option>
				</select>
			</li>
			<li>
				<label for="outlet">Outlet :</label>
				<select name="outlet" id="outlet" required>
					<option value="" hidden>--Pilih Outlet--</option>
					<option value="Delapan Padi">Delapan Padi</option>
					<option value="The Little Flavor Dipati Ukur">The Little Flavor Dipati Ukur</option>
					<option value="The Little Flavor Gegerkalong">The Little Flavor Gegerkalong</option>
					<option value="First Crack Sunter">First Crack Sunter</option>
					<option value="First Crack Karawaci">First Crack Karawaci</option>
					<option value="First Crack Pakubuwono">First Crack Pakubuwono</option>
					<option value="Sucre">Sucre</option>
					<option value="Bask">Bask</option>
				</select>
			</li>
			<li>
				<label for="nik">NIK :</label>
				<input type="text" name="nik" id="nik" required>
			</li>
			<li>
				<label for="kota_lahir">Kota Lahir :</label>
				<input type="text" name="kota_lahir" id="kota_lahir" required>
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir :</label>
				<input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" required>
			</li>
			<li>
				<label for="mobile">Mobile :</label>
				<input type="text" name="mobile" id="mobile" required>
			</li>
			<li>
				<label for="first_join">First Join :</label>
				<input type="date" name="first_join" id="first_join" required>
			</li>

			<input type="date" name="last_day" id="last_day" hidden value="">

			<li>
				<label for="bpjs">No BPJS :</label>
				<input type="text" name="bpjs" id="bpjs">
			</li>
			<li>
				<label for="rek">No Rek :</label>
				<input type="text" name="rek" id="rek">
			</li>
			<li>
				<label for="bank">Bank :</label>
				<input type="text" name="bank" id="bank" required>
			</li>
			<li>
				<label for="ktp">Photo KTP :</label>
				<input type="file" name="ktp" id="ktp" style="width: 200px">
			</li>
			<li>
				<label for="status">Status :</label>
				<input type="text" name="status" id="status" required>
			</li>

			<input type="date" name="created_at" id="created_at" hidden value="<?= $date; ?>">

			<input type="text" name="creator" id="creator" hidden value="<?= $_SESSION["username"]; ?>">

			<br>

			<button type="submit" name="submit">Tambah Data!</button>

		</ul>
	</form>
</body>

</html>