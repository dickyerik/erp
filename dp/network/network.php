<?php
session_start();

require '../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Computer Network</title>
</head>

<body>
    <ul class="nav d-print-none">
        <li class="nav-item">
            <a class="nav-link" href="../admin/index.php">Kembali ke Home</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Jaringan Komputer Delapan Padi dan Akun lainnya</h1>
                <br>
                <hr>
                <h2 class="mt-5">Email for Backup Raptor Database</h2>
                <ul>
                    <h5>Login Email Backup</h5>
                    <ul>
                        <li>Nama Email : Delapan Padi Backup</li>
                        <li>Alamat Email : dbdpbackup@gmail.com</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                </ul>
                <hr>
                <h2 class="mt-5">Pendaftaran sertifikat halal</h2>
                <ul>
                    <h5>Login</h5>
                    <ul>
                        <li>Alamat web : <a href="https://ptsp.halal.go.id/">https://ptsp.halal.go.id/</a></li>
                        <li>Email : dicky.delapanpadi@gmail.com</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                </ul>
                <hr>
                <h2 class="mt-5">Router Biznet</h2>
                <ul>
                    <h5>Login ke router</h5>
                    <ul>
                        <li>Ip Adress : 192.168.100.1</li>
                        <li>User : Epuser</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : Delapan Padi Front</li>
                        <li>Password : medallion</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Router Mikrotik</h2>
                <ul>
                    <h5>Login Mikrotik via Winbox</h5>
                    <ul>
                        <li>IP Address 1 : 192.168.5.1</li>
                        <li>IP Address 2 : 192.168.100.250</li>
                        <li>MAC Adress : 18:FD:74:04:F7:C6</li>
                        <li>User : dpmkrtk</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Access Point 1</h2>
                <ul>
                    <h5>Login ke AP</h5>
                    <ul>
                        <li>Ip Adress : 88.88.88.8</li>
                        <li>User : admin</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : Delapan Padi Dining 1</li>
                        <li>Password : medallion</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Access Point 2</h2>
                <ul>
                    <h5>Login ke AP</h5>
                    <ul>
                        <li>Ip Adress : 89.89.89.8</li>
                        <li>User : admin</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : Delapan Padi Dining 2</li>
                        <li>Password : medallion</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Access Point 3</h2>
                <ul>
                    <h5>Login ke AP</h5>
                    <ul>
                        <li>Ip Adress : 90.90.90.8</li>
                        <li>User : admin</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : Delapan Padi Meeting / Delapan Padi Meeting 5G</li>
                        <li>Password : medallion</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Access Point 4</h2>
                <ul>
                    <h5>Login ke AP</h5>
                    <ul>
                        <li>Ip Adress : 91.91.91.8</li>
                        <li>User : admin</li>
                        <li>Password : 8delapanadmin</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : Office</li>
                        <li>Password : officedp8</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <h2 class="mt-5">Access Point 5</h2>
                <ul>
                    <h5>Login ke AP</h5>
                    <ul>
                        <li>Ip Adress : 92.92.92.8</li>
                        <li>User : telecomadmin</li>
                        <li>Password : admintelecom</li>
                    </ul>
                    <h5>Login ke wifi</h5>
                    <ul>
                        <li>SSID : GA</li>
                        <li>Password : medallion</li>
                    </ul>
                </ul>
                <br>
                <hr>
                <hr>
                <hr>
                <h2 class="mt-5">Static IP Address List (DP)</h2>
                <ol>
                    <b>
                        <li>192.168.5.1 as Router Mikrotik</li>
                    </b>
                    <b>
                        <li>192.168.5.2 as PC GA</li>
                    </b>
                    <b>
                        <li>192.168.5.3 as GA Mobile Phone</li>
                    </b>
                    <b>
                        <li>192.168.5.4 as PC Admin</li>
                    </b>
                    <b>
                        <li>192.168.5.5 as Laptop Marketing</li>
                    </b>
                    <b>
                        <li>192.168.5.6 as PC Server</li>
                    </b>
                    <b>
                        <li>192.168.5.7 as POS01/Cashier</li>
                    </b>
                    <b>
                        <li>192.168.5.8 as POS02/Area Utama</li>
                    </b>
                    <b>
                        <li>192.168.5.9 as POS03/Area Kanan</li>
                    </b>
                    <b>
                        <li>192.168.5.10 as POS04/Sucre</li>
                    </b>
                    <b>
                        <li>192.168.5.11 as POS05/Betah Space</li>
                    </b>
                    <b>
                        <li>192.168.5.12 as DVR 1</li>
                    </b>
                    <b>
                        <li>192.168.5.13 as DVR 2</li>
                    </b>
                    <b>
                        <li>192.168.5.14 as PC Purchasing</li>
                    </b>
                    <b>
                        <li>192.168.5.15 as Mesin Finger Print</li>
                    </b>
                    <b>
                        <li>192.168.5.16 as Human Resource Laptop</li>
                    </b>
                    <b>
                        <li>192.168.5.17 as Kali Linux</li>
                    </b>
                    <b>
                        <li>192.168.5.18 as PC Admin2</li>
                    </b>
                </ol>
                <br>
                <hr>
                <h2 class="mt-5">Static IP Address List (Raptor)</h2>
                <ol>
                    <b>
                        <li>192.168.1.1 as Raptor Gateway</li>
                    </b>
                    <b>
                        <li>192.168.1.3 as PC Server</li>
                    </b>
                    <b>
                        <li>192.168.1.21 as POS01/Cashier</li>
                    </b>
                    <b>
                        <li>192.168.1.22 as POS02/Area Utama</li>
                    </b>
                    <b>
                        <li>192.168.1.99 as POS03/Area Kanan</li>
                    </b>
                    <b>
                        <li>192.168.1.24 as POS04/Sucre</li>
                    </b>
                    <b>
                        <li>192.168.1.9 as POS05/Betah Space</li>
                    </b>
                    <b>
                        <li>192.168.1.51 as Printer Kitchen</li>
                    </b>
                    <b>
                        <li>192.168.1.52 as Printer Bar</li>
                    </b>
                </ol>
                <br>
                <hr>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
</body>

</html>