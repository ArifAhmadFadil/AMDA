<!DOCTYPE html>
<html lang="en">
<head>
  <title>AMDA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<?php
include "insert_data.php";?>
<?php include "..//navbar.php"?>

<?php
//mengambil data alumni lewat URL
$id_alummni = (INT)$_GET['id_alumni'];

//menampilkan data alumi 
$alumni = "SELECT * FROM alumni WHERE id_alumni = $id_alummni";
$sql2 = mysqli_query($koneksi,$alumni);
$sq2 = mysqli_fetch_assoc($sql2);
// print_r($sq2); (untuk menmpilkan hasil eror atau sukses)


?>

<div class="container mt-5">
<h1>DETAIL ALUMNI 
<a class="btn btn-primary float-right" href="http://localhost/da/alumni/edit.php">Edit Data</a>
<!-- <a class="btn btn-primary float-right" href="http://localhost/da/alumni/alumnida.php"><</a> -->
</h1>
    <hr>
    <table class="table table-bordered table-striped mt-1">
        <tr>
            <td>Nama Lengkap</td>
            <td>: <?= $sq2['nama_lengkap']?></td>
        </tr>
        <tr>
            <td>Nama Panggilan</td>
            <td>: <?= $sq2['nam_panggilan']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $sq2['email']?></td>
        </tr>
        <tr>
            <td>Alamat Asak</td>
            <td>: <?= $sq2['alamat_asal']?></td>
        </tr>
        <tr>
            <td>Alamat Domisili</td>
            <td>: <?= $sq2['alamat_domisili']?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>: <?= $sq2['nomor_hp']?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: <?= $sq2['status']?></td>
        </tr>
        <tr>
            <td>Nama Kampus</td>
            <td>: <?= $sq2['nama_kampus']?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?= $sq2['jurusan']?></td>
        </tr>
        <tr>
            <td>Alamat Kampus</td>
            <td>: <?= $sq2['alamat_kampus']?></td>
        </tr>
        <tr>
            <td>Bekerja</td>
            <td>: <?= $sq2['alamat_kerja']?></td>
        </tr>
        <tr>
            <td>Pesantren</td>
            <td>: <?= $sq2['nama_pondok']?></td>
        </tr>
        <tr>
            <td>Alamat Pesantren</td>
            <td>: <?= $sq2['alamat_pondok']?></td>
        </tr>
        <tr>
            <td>Alumni Angkatan</td>
            <td>: <?= $sq2['alumni_angkatan']?></td>
        </tr>
        <tr>
            <td>Alumnus</td>
            <td>: <?= $sq2['alumni_alumnus']?></td>
        </tr>

    </table>
    <a class="btn btn-primary" href="http://localhost/da/alumni/alumnida.php">Kembali</a>
</div>