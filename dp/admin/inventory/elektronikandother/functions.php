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

function tambahbarang($data)
{
    global $conn;

    $idOutlet = htmlspecialchars($data["idOutlet"]);
    $kategori_asset = htmlspecialchars($data["kategori_asset"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $photo = upload();

    $satuan = htmlspecialchars($data["satuan"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $so = htmlspecialchars($data["so"]);
    $harga = htmlspecialchars($data["harga"]);
    $pic = htmlspecialchars($data["pic"]);
    $posisi = htmlspecialchars($data["posisi"]);
    $created_at = htmlspecialchars($data["created_at"]);
    $catatan = htmlspecialchars($data["catatan"]);
    $sku = sku();

    $query = "INSERT INTO barang VALUES('','$idOutlet','$kategori_asset','$nama_barang','$deskripsi','$photo','$satuan','$kategori','','$so','$harga','$created_at','','$pic','$posisi','$catatan', '$sku')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['photo']['name'];
    $ukuranFile = $_FILES['photo']['size'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 5242880) {
        echo "<script>
				alert('ukuran gambar terlalu besar');
			  </script>";
        return false;
    }

    // lolos pengecekkan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../../../img/' . $namaFileBaru);

    return $namaFileBaru;
}

function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $idOutlet = htmlspecialchars($data["idOutlet"]);
    $kategori_asset = htmlspecialchars($data["kategori_asset"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $photoLama = htmlspecialchars($data["photoLama"]);
    if ($_FILES['photo']['error'] === 4) {
        $photo = $photoLama;
    } else {
        $photo = upload();
    }

    $satuan = htmlspecialchars($data["satuan"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $qty = htmlspecialchars($data["qty"]);
    $so = htmlspecialchars($data["so"]);
    $harga = htmlspecialchars($data["harga"]);
    $created_at = htmlspecialchars($data["created_at"]);
    $updated_at = htmlspecialchars($data["updated_at"]);
    $pic = htmlspecialchars($data["pic"]);
    $posisi = htmlspecialchars($data["posisi"]);
    $catatan = htmlspecialchars($data["catatan"]);
    $sku = skuubah();

    $query = "UPDATE barang SET 
    idOutlet = '$idOutlet',
    kategori_asset = '$kategori_asset',
    nama_barang = '$nama_barang',
    deskripsi = '$deskripsi',
    photo = '$photo',
    satuan = '$satuan',
    kategori = '$kategori',
    qty = '$qty',
    so = '$so', 
    harga = '$harga',
    created_at = '$created_at',
    updated_at = '$updated_at',
    pic = '$pic',
    posisi = '$posisi',
    catatan = '$catatan',
    sku = '$sku'

    WHERE id = $id;

    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahbarangmasuk($data)
{
    global $conn;

    $id = $data["id"];
    $tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
    $qty_masuk = htmlspecialchars($data["qty_masuk"]);
    $keterangan_masuk = htmlspecialchars($data["keterangan_masuk"]);
    $pic = htmlspecialchars($data["pic"]);


    $query = "INSERT INTO barangmasuk VALUES ('', '$id', '$tanggal_masuk', '$qty_masuk', '$keterangan_masuk', '$pic')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahbarangkeluar($data)
{
    global $conn;

    $id = $data["id"];
    $tanggal_keluar = htmlspecialchars($data["tanggal_keluar"]);
    $qty_keluar = htmlspecialchars($data["qty_keluar"]);
    $keterangan_keluar = htmlspecialchars($data["keterangan_keluar"]);
    $pic = htmlspecialchars($data["pic"]);


    $query = "INSERT INTO barangkeluar VALUES ('', '$id', '$tanggal_keluar', '$qty_keluar', '$keterangan_keluar', '$pic')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tgl_indo($tanggal)
{
    $bulan = array(
        0 => '',
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Ags',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . '  ' . $bulan[(int)$pecahkan[1]] . '  ' . $pecahkan[0];

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $role = strtolower(stripslashes($data["role"]));

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM multiuser WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!');
			  </script>";
        return false;
    }



    // cek konfirmasi password

    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
			  </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO multiuser VALUES ('', '$username', '$password', '$role')");

    return mysqli_affected_rows($conn);
}

function tambahmaintenancehistory($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $pic = htmlspecialchars($data["pic"]);


    $query = "INSERT INTO maintenancehistory VALUES ('', '$id', '$tanggal','$deskripsi','$harga', '$pic')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahkaryawan($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $id_karyawan = htmlspecialchars($data["id_karyawan"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $outlet = htmlspecialchars($data["outlet"]);
    $nik = htmlspecialchars($data["nik"]);
    $kota_lahir = htmlspecialchars($data["kota_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $email = htmlspecialchars($data["email"]);
    $mobile = htmlspecialchars($data["mobile"]);
    $first_join = htmlspecialchars($data["first_join"]);
    $last_day = htmlspecialchars($data["last_day"]);
    $bpjs = htmlspecialchars($data["bpjs"]);
    $rek = htmlspecialchars($data["rek"]);
    $bank = htmlspecialchars($data["bank"]);

    // upload gambar
    $ktp = uploadktp();
    if (!$ktp) {
        return false;
    }
    // $ktp = htmlspecialchars($data["ktp"]);

    $status = htmlspecialchars($data["status"]);
    $created_at = htmlspecialchars($data["created_at"]);
    $creator = htmlspecialchars($data["creator"]);

    $query = "INSERT INTO karyawan VALUES ('', '$nama', '$id_karyawan', '$kategori', '$divisi','$jabatan', '$outlet', '$nik', '$kota_lahir', '$tanggal_lahir', '$email', '$mobile', '$first_join', '$last_day', '$bpjs', '$rek', '$bank', '$ktp', '$status', '$created_at', '', '$creator')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadktp()
{

    $namaFile = $_FILES['ktp']['name'];
    $ukuranFile = $_FILES['ktp']['size'];
    $error = $_FILES['ktp']['error'];
    $tmpName = $_FILES['ktp']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return true;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 5242880) {
        echo "<script>
				alert('ukuran gambar terlalu besar');
			  </script>";
        return false;
    }

    // lolos pengecekkan, gambar siap diupload\
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../ktp/' . $namaFileBaru);

    return $namaFileBaru;
}

function cari($keyword)
{
    $query = "SELECT * FROM barang WHERE kategori = 'Elektronik dan lainnya' AND
    nama_barang LIKE '%$keyword%'
    ";
    return query($query);
}

function sku()
{
    $last_id = query("SELECT MAX(id) as di FROM barang");
    $last = $last_id[0]["di"] + 1;
    $idOutlet = $_POST["idOutlet"];
    $kategori_asset = $_POST["kategori_asset"];
    $posisi = $_POST["posisi"];

    $sku = "$idOutlet/$kategori_asset/$posisi/$last";

    return $sku;
}

function skuubah()
{
    $id = $_POST["id"];
    $idOutlet = $_POST["idOutlet"];
    $kategori_asset = $_POST["kategori_asset"];
    $posisi = $_POST["posisi"];

    $sku = "$idOutlet/$kategori_asset/$posisi/$id";

    return $sku;
}
