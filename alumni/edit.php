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
$id_alummni = (INT)$_GET['id'];

$alumni = "UPDATE * SET alumni WHERE id_alumni=$id_alummni";
$sql3=mysqli_query($koneksi,$alumni);
$sq3=mysqli_fetch_assoc($id_alummni);
    // $id_alummni         = $_GET['id_alumni'];
    // $sql3       = "select * from alumni where id = '$id_alumni'";
    // $q3         = mysqli_query($koneksi, $sql3);
    // $r3         = mysqli_fetch_array($q3);
// print_r($sql3);

?>
<div class="card">
            
            </div>
            <div class="card-body">
                
            
                <form action="edit.php" method="POST">
                <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="nama_lengkap" name="nama_lengkap value="<?php echo $row['id']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nam_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="nam_panggilan" name="nam_panggilan" ">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="alamat_asal" class="col-sm-2 col-form-label">Alamat Asal</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="alamat_asal" name="alamat_asal">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="alamat_domisili" class="col-sm-2 col-form-label">Alamat Domisili</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="alamat_domisili" name="alamat_domisili">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="int"  class="form-control" id="nomor_hp" name="nomor_hp">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="status" name="status">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nama_kampus" class="col-sm-2 col-form-label">Nama Kampus</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="nama_kampus" name="nama_kampus">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="jurusan" name="jurusan">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Alamat Kampus</label>
                        <div class="col-sm-10">
                            <input type="alamat_kampus"  class="form-control" id="alamat_kampus" name="alamat_kampus">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="bekerja" class="col-sm-2 col-form-label">Bekerja</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="bekerja" name="bekerja">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Alamat Bekerja</label>
                        <div class="col-sm-10">
                            <input type="alamat_kerja"  class="form-control" id="alamat_kerja" name="alamat_kerja">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="nama_pondok" class="col-sm-2 col-form-label">Pesantren</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="nama_pondok" name="nama_pondok">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="alamat_pondok" class="col-sm-2 col-form-label">Alamat Pesantren</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="alamat_pondok" name="alamat_pondok">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="alumni_angkatan" class="col-sm-2 col-form-label">Angkatan Alumni</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="alumni_angkatan" name="alumni_angkatan">
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="alumni_alumnus" class="col-sm-2 col-form-label">Alumnus</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="alumni_alumnus" name="alumni_alumnus">
                    </div>
                </div>
                <div class="col-12">
                    <input type="Submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
                </div>
            </div>
                </form>
            
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    
                </form>
            </div>
        </div>