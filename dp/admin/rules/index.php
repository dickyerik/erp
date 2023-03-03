<?php

session_start();

require '../../functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../login.php");
    exit;
}

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        * {
            text-decoration: none;
            list-style-type: none;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }

        li {
            text-decoration: none;
            list-style-type: none;
        }

        p {
            text-align: left;
        }

        .contrules {
            border: solid 1px red;
            padding: 50px;
        }

        .mengetahui {
            margin-top: 100px;
        }

        .nama {
            margin-top: 80px;
        }
    </style>
    <title>Peraturan Perusahaan</title>
</head>

<body class="indexrules">
    <div class="contrules">
        <h1>PERATURAN CUTI</h1>
        <ul>
            <p>1. Cuti berlaku bagi karyawan yang sudah bekerja selama 1 tahun, terhitung sejak lulus masa percobaan/probation (3 bulan).</p>
            <p>2. Pengambilan cuti minimal 1 minggu sebelumnya, dan wajib ACC atasan. Ijin cuti yang sudah ditandatangani lengkap harus diterima HRD maksimal H-2 sebelum cuti.</p>
            <p>3. Cuti yang tidak digunakan/diambil akan hangus.</p>
            <p>4. Perusahaan mewajibkan setiap karyawan mengambil hari cuti tersebut dan digunakan untuk beristirahat atau bersama keluarga.</p>
            <p>5. Jumlah hari cuti dalam setahun yang diterima karyawan adalah sebagai berikut:</p>
            <ul>
                <li>A. Karyawan yang sudah bekerja lebih dari 12 bulan berhak mendapatkan 10 hari cuti</li>
                <li>B. Karyawan yang sudah bekerja lebih dari 24 bulan berhak mendapatkan 11 hari cuti</li>
                <li>C. Karyawan yang sudah bekerja lebih dari 36 bulan atau lebih berhak mendapatkan 12 hari cuti</li>
            </ul>
            <p>6. Lama cuti yang bisa diambil oleh karyawan per cuti adalah sebagai berikut:</p>
            <ul>
                <li>A. Karyawan yang sudah bekerja lebih dari 12 bulan, berhak mengambil hari cuti maksimal 7 hari konsekutif, yang merupakan gabungan dari cuti, PH, dan hak libur lainnya.</li>
                <li>B. Karyawan yang sudah bekerja lebih dari 24 bulan, berhak mengambil hari cuti maksimal 8 hari konsekutif, yang merupakan gabungan dari cuti, PH, dan hak libur lainnya.</li>
                <li>C. Karyawan yang sudah bekerja lebih dari 36 bulan, berhak mengambil hari cuti maksimal 9 hari konsekutif, yang merupakan gabungan dari cuti, PH, dan hak libur lainnya.</li>
            </ul>
            <p>7. Cuti berlaku sampai dengan tahun berikutnya (Contoh : Budi lulus probation tanggal 5 Januari 2019, maka per tanggal 5 Januari 2020 Budi memiliki jumlah hari cuti sebanyak 10 hari dan hari cuti tersebut dapat diambil sampai dengan tanggal 4 Januari 2021).</p>
            <p>8. Peraturan dapat berubah atau disesuaikan dan akan di informasikan kepada seluruh karyawan jika terjadi perubahan.</p>
            <p class="mengetahui">Mengetahui</p>
            <div class="nama">Felita Atmadja</div>
            <div class="jabatan">Direktur</div>
        </ul>


    </div>
    <h1>PERATURAN PH</h1>
    <p>
        1. SEMUA KARYAWAN BERHAK MENDAPATKAN 1 HARI PH APABILA YANG BERSANGKUTAN MASUK DI HARI PH TERSEBUT TERKECUALI STAFF OFFICE
        2. PH HARUS DIGUNAKAN MAKSIMAL 3 BULAN SETELAH HARI LIBUR TSB
        3. PH YANG TIDAK DIGUNAKAN DALAM JANGKA WAKTU 3 BULAN AKAN DIANGGAP HANGUS
        4. PENGGUNAAN PH (DILUAR OFF DAY) MAKSIMAL 3 HARI BERTURUT-TURUT – point ini disamakan saja dengan point 6 peraturan cuti
        5. PH HANYA DIPERUNTUKKAN BAGI KARYAWAN YANG SUDAH LEWAT MASA PERCOBAAN 3 BULAN
        6. PENGAMBILAN PH HARUS SESUAI IJIN DAN ACC ATASAN
        7. PERATURAN DAPAT BERUBAH ATAU DISESUAIKAN DAN AKAN DI INFORMASIKAN KEPADA SELURUH KARYAWAN JIKA TERJADI PERUBAHAN
        Mengetahui



        Felita Atmadja
        Direktur
    </p>









    <h1>PERATURAN ABSENSI DAN KETERLAMBATAN</h1>
    <p>
        1. KALENDER KERJA TERHITUNG DARI TANGGAL 26 SAMPAI DENGAN 25 BULAN BERIKUTNYA
        2. PEMBAYARAN GAJI SETIAP TANGGAL 1
        3. KETERLAMBATAN KERJA DIDENDA RP 1.000,- SETIAP MENITNYA
        4. TELAT LEBIH DARI 20 MENIT DENDA RP 20.000,- PLUS JUMLAH DENDA PER MENIT, MAX RP 50.000
        5. BAGI YANG TIDAK FINGERPRINT DIANGGAP TELAT 20 MENIT DAN MENDAPATKAN SANKSI DENDA MAKSIMUM RP 50.000
        6. TELAT 3X DALAM 1 KALENDER KERJA, TUNJANGAN KERAJINAN HILANG
        7. PEMBERITAHUAN IJIN 30 MENIT SEBELUM JAM MASUK DIANGGAP ALPHA
        8. TIDAK MASUK TANPA IJIN, DIANGGAP ALPHA DAN TUNJANGAN KERAJINAN HILANG
        9. PENGAJUAN IJIN UNTUK KEPERLUAN PRIBADI WAJIB DIBERITAHUKAN KEPADA ATASAN MIN 3 HARI SEBELUMNYA
        10. ACC PENGAJUAN IJIN HARUS MENDAPATKAN PERSETUJUAN DARI ATASAN. SURAT IJIN YANG SUDAH DITANDATANGANI LENGKAP HARUS SUDAH DITERIMA HRD MAX H-2 SEBELUM IJIN
        11. IJIN SAKIT DENGAN SURAT KETERANGAN DOKTER DIHITUNG MASUK
        12. 1 SKD DIHITUNG MAKSIMAL 2 HARI KERJA. JIKA SURAT BERASAL DARI DOKTER ATAU RS (BUKAN PUSKESMAS)
        13. PERHITUNGAN SKD HANYA BERLAKU 1X DALAM 3 KALENDER KERJA, BERLAKU BAGI YANG SUDAH LULUS PROBATION
        14. JIKA KERJA LEBIH DARI 48 JAM DALAM SEMINGGU, PERJAMNYA TERHITUNG OVERTIME
        15. HITUNGAN OVERTIME ADALAH RP 10.000 PER JAM
        16. PERUSAHAAN TIDAK MENTOLERIR PERKATAAN KASAR, PENCURIAN, DAN PERKELAHIAN (HUKUMAN BISA SAMPAI DENGAN SP 3)
        17. PENGUNDURAN DIRI DIWAJIBKAN UNTUK MEMBERITAHUKAN 30 HARI SEBELUMNYA (1-MONTH NOTICE)
        18. JIKA RESIGN MENDADAK ATAU PADA HARI ITU JUGA, MAKA PIHAK PERUSAHAAN TIDAK BERKEWAJIBAN MEMBAYARKAN SISA HARI KERJA YANG TELAH DILAKSANAKAN
        19. GAJI AKAN DITERIMA JIKA SUDAH SUDAH MENGEMBALIKKAN SERAGAM DAN SEMUA PROPERTI DELAPAN PADI DAN MELAKUKAN EXIT INTERVIEW
        20. PERATURAN DAPAT BERUBAH ATAU DISESUAIKAN DAN AKAN DI INFORMASIKAN KEPADA SELURUH KARYAWAN JIKA TERJADI PERUBAHAN

        Mengetahui


        Felita Atmadja
        Direktur
    </p>
</body>

</html>