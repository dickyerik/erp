<?php

require '../functions.php';

$data = $_POST;

$count = count($_POST['invoiceId']);

for ($i = 0; $i < $count; $i++) {
    $sql = "INSERT INTO `daftarbelanja` (`invoiceId`, `createdDate`, `clientId`, `assetId`, `harga`, `qty`, `pic`) VALUES ('{$_POST['invoiceId'][$i]}', '{$_POST['createdDate'][$i]}', '{$_POST['clientId'][$i]}', '{$_POST['assetId'][$i]}', '{$_POST['harga'][$i]}', '{$_POST['qty'][$i]}', '{$_POST['pic'][$i]}')";
    $conn->query($sql);
}

echo "
    <script>
    	alert('Data berhasil ditambahkan!');
    	document.location.href = 'tambahdatabelanja.php';
    </script>
    ";
