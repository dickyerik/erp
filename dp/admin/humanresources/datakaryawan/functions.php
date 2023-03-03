<?php
$conn = mysqli_connect("localhost", "root", "", "dp");

function query($query)
{
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambahkaryawan($data)
{
	global $conn;

	$nama_karyawan = htmlspecialchars($data["nama_karyawan"]);
	$nik = htmlspecialchars($data["nik"]);
	$kota_lahir = htmlspecialchars($data["kota_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$tanggal_gabung = htmlspecialchars($data["tanggal_gabung"]);
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query = "INSERT INTO karyawan VALUES ('', '$nama_karyawan', '$nik', '$kota_lahir', '$tanggal_lahir', '$tanggal_gabung', '$keterangan')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	$id_karyawan = $data["id_karyawan"];
	$nama_karyawan = htmlspecialchars($data["nama_karyawan"]);
	$nik = htmlspecialchars($data["nik"]);
	$kota_lahir = htmlspecialchars($data["kota_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$tanggal_gabung = htmlspecialchars($data["tanggal_gabung"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "UPDATE karyawan SET 
				nama_karyawan = '$nama_karyawan',
				nik = '$nik',
				kota_lahir = '$kota_lahir', 
				tanggal_lahir = '$tanggal_lahir', 
				tanggal_gabung = '$tanggal_gabung', 
				keterangan = '$keterangan'
				
				WHERE id_karyawan = $id_karyawan;

				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
