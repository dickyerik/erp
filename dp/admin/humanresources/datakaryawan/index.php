<?php

session_start();

require '../../../functions.php';

$karyawan = query("SELECT * FROM karyawan");

//  WHERE status = 'Aktif'

if (isset($_POST["cari"])) {
	$karyawan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- CSS Saya-->
	<link rel="stylesheet" href="../style.css">

	<title>Data Karyawan</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="container">
					<div class="row">
						<div class="nav">
							<div class="nav-item">
								<a class="nav-link" href="../../index.php">Home</a>
							</div>
							<div class="nav-item">
								<a class="nav-link" href="tambahkaryawan.php">Tambah Karyawan</a>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="container">
							<nav class="navbar navbar-light bg-light">
								<form class="form-inline" action="" method="post">
									<input class="form-control mr-sm-2" size="35" autofocus id="keyword" type="text" name="keyword" autocomplete="off" placeholder="Masukkan keyword pencarian..." aria-label="Search">
									<button class="btn btn-primary" type="submit" name="cari" id="tombol-cari" hidden>Cari!</button>
								</form>
							</nav>
						</div>
						<div class="container ml-3">
							<h4>Daftar Karyawan</h4>
						</div>
					</div>
				</div>

				<div id="con">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead class="table-dark">
								<tr class="text-center">
									<th scope="col">No</th>
									<th scope="col">Edit</th>
									<th scope="col">Nama Lengkap</th>
									<th scope="col">ID Karyawan</th>
									<th scope="col">Kategori Salary</th>
									<th scope="col">Divisi</th>
									<th scope="col">Jabatan</th>
									<th scope="col">Outlet</th>
									<th scope="col">NIK</th>
									<th scope="col">Kota Lahir</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Email</th>
									<th scope="col">Mobile</th>
									<th scope="col">First Join</th>
									<th scope="col">No BPJS</th>
									<th scope="col">No Rek</th>
									<th scope="col">Bank</th>
									<th scope="col">Photo KTP</th>
									<th scope="col">Status Karyawan</th>
								</tr>
							</thead>
							<?php $no = 1; ?>
							<?php foreach ($karyawan as $row) :  ?>
								<tbody>
									<tr class="text-center">
										<th scope="row"><?= $no; ?></th>
										<th scope="row">
											<a href="ubahkaryawan.php?id=<?= $row["id_kry"]; ?>">Ubah Data</a>
										</th>
										<td><?= $row["nama"] ?></td>
										<td><?= $row["id_karyawan"] ?></td>
										<td><?= $row["kategori"] ?></td>
										<td><?= $row["divisi"] ?></td>
										<td><?= $row["jabatan"] ?></td>
										<td><?= $row["outlet"] ?></td>
										<td><?= $row["nik"] ?></td>
										<td><?= $row["kota_lahir"] ?></td>
										<td><?= tgl_indo($row["tanggal_lahir"]) ?></td>
										<td><?= $row["email"] ?></td>
										<td><?= $row["mobile"] ?></td>
										<td><?= tgl_indo($row["first_join"]) ?></td>
										<td><?= $row["bpjs"] ?></td>
										<td><?= $row["rek"] ?></td>
										<td><?= $row["bank"] ?></td>
										<td><img src="ktp/<?= $row["ktp"] ?>" width="150"></td>
										<td><?= $row["status"] ?></td>
									</tr>
								</tbody>
								<?php $no++ ?>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
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